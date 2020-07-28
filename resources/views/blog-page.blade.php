@extends('layout')
@section('content')


	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="/"><i class="fa fa-home"></i></a></li>
			<li>Blog</li>

		</ul>

		<div class="row">
			<!--Left Part Start -->
			<aside class="col-md-3 col-sm-4 col-xs-12 content-aside left_column " id="column-left">

                <div class="module product-simple">
                    <h3 class="modtitle">
                        <span>Derniers produits</span>
                    </h3>
                    <div class="modcontent">
                        <div class="extraslider" >
                            <!-- Begin extraslider-inner -->
                            <div class="yt-content-slider extraslider-inner">
                                <div class="item ">
                                    @foreach ($mightAlsoLike as $product)
                                    <div class="product-layout item-inner style1 ">
                                        <div class="item-image">
                                            <div class="item-img-info">
                                                <a href="{{ route('category.show',$product->slug) }}" target="_self" title="{{ $product->name }}">
                                                    <img src="{{ productImage($product->image) }}" alt="{{ $product->name }}">
                                                    </a>
                                            </div>

                                        </div>
                                        <div class="item-info">
                                            <div class="item-title">
                                                <a href="{{ route('category.show',$product->slug) }}" target="_self" title="{{ $product->name }}">{{ $product->name }} </a>
                                            </div>
                                            <div class="rating">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <div class="content_price price">
                                                <span class="price-new product-price">{{ $product->presentPrice() }} </span>

                                            </div>
                                        </div>
                                        <!-- End item-info -->
                                        <!-- End item-wrap-inner -->
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                            <!--End extraslider-inner -->
                        </div>
                    </div>
                </div>

                <div class="module banner-left hidden-xs ">
                    <div class="banner-sidebar banners">
                      <div>
                        <a title="Banner Image" href="#">
                          <img src="image/catalog/banners/banner-sidebar.jpg" alt="Banner Image">
                        </a>
                      </div>
                    </div>
                </div>
            </aside>
			<!--Left Part End -->

			<!--Middle Part Start-->
			<div id="content" class="col-md-9 col-sm-8">
				<div class="blog-header">
					<h3>Notre blog</h3>

				</div>
				<div class="blog-category clearfix">


                    <div class="blog-listitem row">
                        @if (count($posts))
                        @foreach ($posts as $post)
                        <div class="blog-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="blog-item-inner clearfix">
                                <div class="itemBlogImg clearfix">
                                    <div class="article-image">
                                        <div>
                                            <a class="popup-gallery" href="{{ productImage($post->image) }}">
                                                <img src="{{ productImage($post->image) }}" alt="{{$post->title}}" />
                                            </a>
                                        </div>
                                        <div class="article-date">
                                            <div class="date">  <span class="article-date">
                                                <b>{{$post->created_at->format('j')}}</b>
                                                {{$post->created_at->format('F')}}
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="itemBlogContent clearfix ">
                                    <div class="blog-content">
                                        <div class="article-title font-title">
                                            <h4><a href="{{ route('blog.show',$post->slug) }}">{{$post->title}}</a></h4>
                                        </div>
                                        <div class="blog-meta"> <span class="author"><i class="fa fa-user"></i><span>Publier par </span>{{$post->user}}</span>
                                        </div>
                                        <p class="article-description">{!! $post->excerpt !!}</p>
                                        <div class="readmore">  <a class="btn-readmore font-title" href="{{ route('blog.show',$post->slug) }}"><i class="fa fa-caret-right"></i>Lire la suite</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                            <div class="text-center">No post</div>
                        @endif

                    </div>
                    <div class="product-filter product-filter-bottom filters-panel clearfix">
                        <div class="row">
                            <div class="col-md-6">
                                <div></div>
                            </div>
                            @if (count($posts))
                            <div class="text-center box-pagination">{{ $posts->appends(request()->input())->links() }}</div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!--Middle Part End-->
	</div>
	<!-- //Main Container -->

    @endsection
