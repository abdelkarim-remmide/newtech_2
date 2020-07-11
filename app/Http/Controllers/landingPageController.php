<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

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
        return view('index')->with('products',$products);
    }


}
