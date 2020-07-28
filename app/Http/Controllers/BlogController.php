<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagination=9;
        $posts=Post::orderBy('created_at')->paginate($pagination);

        $categories = Category::whereNull('parent_id')->get();
        $mightAlsoLike = Product::MightAlsoLike4()->get();
        return view('blog-page')->with([
            'posts'=>$posts,
            'mightAlsoLike'=>$mightAlsoLike,
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where('slug',$slug)->firstOrFail();

        $categories = Category::whereNull('parent_id')->get();

        $mightAlsoLike = Product::MightAlsoLike4()->get();
        return view('blog-detail')->with([
            'post'=>$post,
            'mightAlsoLike'=>$mightAlsoLike,
            'categories'=>$categories
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
