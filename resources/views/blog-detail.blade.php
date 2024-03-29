
@extends('layout')
@section('content')


	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="/"><i class="fa fa-home"></i></a></li>
        <li><a href="{{ route('blog.index') }}">Blog</a></li>
			<li>{{$post->title}}</li>
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
				<div class="article-info">
					<div class="blog-header">
						<h3>{{$post->title}}</h3>
					</div>
					<div class="article-sub-title">
						<span class="article-author">Publier par: <a href="#"> {{$post->user}}</a></span>
						<span class="article-date">Date de création: {{$post->created_at}}</span>
					</div>
					<div class="form-group">
						<a href="{{ productImage($post->image) }}" class="image-popup"><img src="{{ productImage($post->image) }}" alt="{{$post->title}}"></a>
					</div>

					<div class="article-description">
						{!! $post->body !!}
					</div>

				</div>

			</div>


		</div>
		<!--Middle Part End-->
	</div>
	<!-- //Main Container -->

@endsection
