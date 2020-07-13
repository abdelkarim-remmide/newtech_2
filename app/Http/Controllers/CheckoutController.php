<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Order;
use App\OrderProduct;
use App\Product;
use App\Mail\OrderPlaced;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\CheckoutRequest;
use Illuminate\Support\Facades\Http;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Cart::count()==0){
            return redirect()->route('category.index');
        }
        if (auth()->user() && request()->is('guestCheckout')) {
            return redirect()->route('checkout.index');
        }
        return view('checkout');
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
        dd('test');
        $returnUrl = url("/confirm/{$order->id}");
        dd($returnUrl);
        $failUrl = "";
        $testUrl = "http://localhost:65510/bank/register.php.php";
        $url = "https://test.satim.dz/payment/rest/register.do";

        $data = [
            'currency' => '012',
            'amount' => Cart::total(),
            'orderNumber' => $order->id,
            'language' => 'fr',
            'userName' => 'newtech2018',
            'password' => 'satim120',
            'returnUrl' => $returnUrl,
            'failUrl' => $failUrl,
            'jsonParams' => [
                'force_terminal_id' => 'E021000004',
                'udf1' => '2018105301346',
                'udf5' => 'ggsf85s42524s5uhgsf'
            ]
        ];
        $response = Http::get($testUrl,$data);
        if($response->successful()){
            $jsonResponse = $response->json();
            dd($jsonResponse);
            if($jsonResponse['errorCode'] == "0"){
                $order->transation_code = $jsonResponse['orderId'];
                $ordre->save();
            }else{
                $order->error = $jsonResponse['errorMessage'];
                $order->save();
                return back()->withErrors('Desole i y avai une error avec le system de payment.');
            }
        }


        $this->decreaseQuantities();
        //Mail::queue(new OrderPlaced($order));
        Cart::destroy();
        return Redirect::to($jsonResponse['formUrl']);

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
        dd($id);
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
