<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use PDF;
use App\Order;
use App\OrderProduct;
use App\Product;
use App\Mail\OrderPlaced;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\CheckoutRequest;
use Illuminate\Support\Facades\Http;
use App\Category;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = Category::whereNull('parent_id')->get();
        if (Cart::count()==0){
            return redirect()->route('category.index');
        }
        if (auth()->user() && request()->is('guestCheckout')) {
            return redirect()->route('checkout.index');
        }
        return view('checkout')->with([
            'categories'=>$categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CheckoutRequest $request)
    {
        if($this->productsAreNoLongerAvailable()){

            return back()->withErrors('Sorry! One of the items in your cart is no longer avialble.');
        }



        $order = $this->addToOrdersTables($request,null);


        $url = "https://test.satim.dz/payment/rest/register.do";
        $response = Http::post("https://40704a77-8413-4455-a205-cb872b330713.mock.pstmn.io/register",[
            'currency' => '012',
            'amount' => Cart::total(),
            'orderNumber' => $order->id,
            'language' => 'fr',
            'userName' => 'newtech2018',
            'password' => 'satim120',
            'returnUrl' => url("/confirm/{$order->id}"),
            'failUrl' => "",
            'jsonParams' => [
                'force_terminal_id' => 'E021000004',
                'udf1' => '2018105301346',
                'udf5' => 'ggsf85s42524s5uhgsf'
            ]
        ]);
        $data = $response->json();
        if($response->successful()){
            if($data['errorCode']=="0"){
                $order->transation_code = $data['orderId'];
                $order->order_status = 'E';
                $order->save();
                $formUrl = $data['formUrl'];
                $this->decreaseQuantities();
                //
                Cart::destroy();
                return redirect($formUrl);
            }else{
                $order->error = $data['errorMessage'];
                $order->order_status = 'O';
                $order->save();
                return back()->withErrors('Desole i y avai une error avec le system de payment.');
            }
        }else{
            $order->error = "connection error";
            $order->order_status = 'O';
            $order->save();
            return back()->withErrors('Desole i y avai une error avec le system de payment.');
        }
    }

    public function sendEmail($id)
    {
        $order = Order::where('id',$id)->firstOrFail();
        Mail::queue(new OrderPlaced($order));
        return view("email-send");
    }

    public function downloadPDF($id)
    {

        $order = Order::where('id',$id)->firstOrFail();
        $pdf = PDF::loadView('pdf', compact(['order']));
        return $pdf->download('invoice.pdf');
    }

    protected function addToOrdersTables($request, $error)
    {
        // Insert into orders table
        $order = Order::create([
            'user_id' => auth()->user() ? auth()->user()->id : null,
            'billing_email' => $request->email,
            'billing_nom' => $request->nom,
            'billing_prenom' => $request->prenom,
            'billing_address' => $request->address,
            'billing_wilaya' => $request->wilaya,
            'billing_pay' => $request->pay,
            'billing_code_postal' => $request->code_postal,
            'billing_tel' => $request->tel,
            'billing_subtotal' => Cart::total(),
            'billing_total' => Cart::total(),
            'transation_date'=> \Carbon\Carbon::now(),
            'error' => $error,
        ]);



        // Insert into order_product table
        foreach (Cart::all() as $item) {
            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $item->product->id,
                'quantity' => $item->qty,
            ]);
        }

        return $order;
    }

    protected function decreaseQuantities()
    {
        foreach (Cart::all() as $item) {
            $product = Product::find($item->product->id);

            $product->update(['quantity' => $product->quantity - $item->qty]);
        }
    }

    protected function productsAreNoLongerAvailable()
    {
        foreach (Cart::all() as $item) {
            $product = Product::find($item->product->id);
            if ($product->quantity < $item->qty) {
                return true;
            }
        }

        return false;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::where('id',$id)->firstOrFail();
        if(!$order->order_status == 'E'){

        }

        $categories = Category::whereNull('parent_id')->get();
        $url = "https://test.satim.dz/payment/rest/register.do";
        $response = Http::post("https://40704a77-8413-4455-a205-cb872b330713.mock.pstmn.io/confirm",[
            'orderId' => $order->transation_code,
            'language' => 'fr',
            'userName' => 'newtech2018',
            'password' => 'satim120',
        ]);
        $data = $response->json();
        if($data['errorCode']=="0" && $data['params']['respCode']=="00" && $data['orderStatus']=="2"){
            $order->order_status = 'C';
            $order->approvalCode = $data['approvalCode'];
            $order->respCode = $data['params']['respCode'];
            $order->save();
            $products = $order->products;
            return view('order-status')->with([
                'data'=>$data,
                'order'=>$order,
                'products'=>$products,
                'categories'=>$categories
            ]);
        }elseif ($data['errorCode']=="0" && $data['params']['respCode']=="00" && $data['orderStatus']=="3"){
            $order->order_status = 'R';
            $order->respCode = $data['params']['respCode'];
            $order->save();
            return view('order-rejeter')->with([
                'categories'=>$categories
            ]);
        }else{
            $order->order_status = 'F';
            $order->respCode = $data['params']['respCode'];
            $order->save();
            return view('order-fail')->with([
                'data'=>$data,
                'categories'=>$categories
            ]);
        }
    }

    public function refund($id)
    {
        $order = Order::where('id',$id)->firstOrFail();
        if(!$order->order_status == 'C'){

        }
        $categories = Category::whereNull('parent_id')->get();
        $url = "https://test.satim.dz/payment/rest/refund.do";
        $response = Http::post("https://40704a77-8413-4455-a205-cb872b330713.mock.pstmn.io/refund",[
            'orderId' => $order->transation_code,
            'language' => 'fr',
            'userName' => 'newtech2018',
            'password' => 'satim120',
        ]);
        $data = $response->json();
        if($data['errorCode']=="0"){
            $order->order_status = 'D';
            $order->save();
            return view('refund-success')->with([
                'categories'=>$categories
            ]);
        }else{
            return view('refund-fail')->with([
                'data'=>$data,
                'categories'=>$categories
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
