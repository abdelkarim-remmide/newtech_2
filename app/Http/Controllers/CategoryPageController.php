<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class CategoryPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->pagination == '100') {
            $pagination = 100;
        } elseif (request()->pagination == '25') {
            $pagination = 25;
        } elseif (request()->pagination == '50') {
            $pagination = 50;
        } elseif (request()->pagination == '75') {
            $pagination = 75;
        }else{
            $pagination = 15;
        }
        $categories = Category::whereNull('parent_id')->get();
        if(request()->category){
            $products = Product::with('category')->whereHas('category', function ($query) {
                $query->where('slug', request()->category);
            });
            $categoryName = optional(Category::where('slug', request()->category)->first())->name;
        }else{
            $products = Product::where('featured', true);
            $categoryName = 'Featured';
        }
        if (request()->sort == 'low_high') {
            $products = $products->orderBy('price')->paginate($pagination);
        } elseif (request()->sort == 'high_low') {
            $products = $products->orderBy('price', 'desc')->paginate($pagination);
        } elseif (request()->sort = 'a_z') {
            $products = $products->orderBy('name')->paginate($pagination);
        } elseif (request()->sort = 'z_a') {
            $products = $products->orderBy('name', 'desc')->paginate($pagination);
        } else {
            $products = $products->paginate($pagination);
        }


        return view('category')->with([
            'products'=>$products,
            'categories'=>$categories,

            'categoryName' => $categoryName,
            ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug',$slug)->firstOrFail();

        $categories = Category::whereNull('parent_id')->get();
        $mightAlsoLike = Product::where('slug','!=',$slug)->MightAlsoLike()->get();
        if ($product->quantity>setting('site.stock_threshold')){
            $stocklevel = 'En stock';
        }elseif ($product->quantity<=setting('site.stock_threshold') && $product->quantity>0) {
            $stocklevel = 'Stock faible';
        }else{
            $stocklevel = 'Indisponible';
        }
        return view('product')->with([
            'product'=>$product,
            'mightAlsoLike'=>$mightAlsoLike,
            'stocklevel'=>$stocklevel,
            'categories'=>$categories
        ]);
    }

    public function search(Request $request)
    {
        $request->validate([
            'q' => 'required|min:3',
        ]);

        $query = $request->input('q');

        // $products = Product::where('name', 'like', "%$query%")
        //                    ->orWhere('details', 'like', "%$query%")
        //                    ->orWhere('description', 'like', "%$query%")
        //                    ->paginate(10);

        $categories = Category::whereNull('parent_id')->get();
        $products = Product::search($query)->paginate(15);

        return view('search-results')->with([
            'products' => $products,

            'categories'=>$categories

            ]);
    }

    public function searchAlgolia(Request $request)
    {
        return view('search-results-algolia');
    }


}
