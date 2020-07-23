<?php

namespace App\Http\Controllers;
use App\Product;
use App\Post;
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
        $accessoireProducts = Product::with('category')->whereHas('category', function ($query) {
                $query->where('slug', 'accessoire');
            })->take(10)->get();
        $dealofweek = Product::inRandomOrder()->take(4)->get();
        $categories = Category::whereNull('parent_id')->get();
        $posts = Post::orderBy('created_at','DESC')->take(8)->get();
        return view('index')->with([
            'products'=>$products,
            'categories'=>$categories,
            'posts'=>$posts,
            'dealofweek'=>$dealofweek,
            'accessoireProducts'=>$accessoireProducts
        ]);
    }


}
