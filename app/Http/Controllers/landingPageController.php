<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use App\Category;


class landingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::inRandomOrder()->take(8)->get();
        $categories = Category::whereNull('parent_id')->get();
        return view('index')->with([
            'products'=>$products,
            'categories'=>$categories
        ]);
    }


}
