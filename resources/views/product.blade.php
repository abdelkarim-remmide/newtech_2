
@extends('layout')
@section('title')

@endsection
@section('extra-css')

<link href="{{asset('/js/lightslider/lightslider.css')}}" rel="stylesheet">
@endsection
@section('content')



	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="/"><i class="fa fa-home"></i></a></li>
        <li><a href="{{route('category.index',['category'=>$product->category[0]->slug])}}">{{$product->category[0]->name}}</a></li>
			<li>{{ $product->name }}</li>

		</ul>

		<div class="row">

			<!--Left Part Start -->
			<aside class="col-sm-4 col-md-3 content-aside" id="column-left">
				<div class="module category-style">
                	<h3 class="modtitle">Categories</h3>
                	<div class="modcontent">
                		<div class="box-category">
                			<ul id="cat_accordion" class="list-group">
                				@foreach ($categories as $category)
                                <li class="@if (count($category->childCategory)) hadchild @endif"><a href="{{route('category.index',['category'=>$category->slug])}}" class="@if (count($category->childCategory)) cutom-parent @endif {{ setActiveCategory($category->slug) }}">{{$category->name}}</a>
                                    @if (count($category->childCategory))
                                    <span class="button-view  fa fa-plus-square-o"></span>
                                    <ul style="display: block;">
                                    @foreach ($category->childCategory as $subCat)
                                    <li><a href="{{route('category.index',['category'=>$subCat->slug])}}">{{$subCat->name}}</a></li>
                                    @endforeach


                					</ul>
                                    @endif

                				</li>
                                @endforeach
                			</ul>
                		</div>


                	</div>
                </div>
            </aside>
            <!--Left Part End -->

			<!--Middle Part Start-->
			<div id="content" class="col-md-9 col-sm-8">

				<div class="product-view row">
					<div class="left-content-product">

						<div class="content-product-left class-honizol col-md-5 col-sm-12 col-xs-12">
							<div class="large-image  ">
								<img itemprop="image" class="product-image-zoom" src="{{ productImage($product->image) }}" data-zoom-image="{{ productImage($product->image) }}" title="{{ $product->name }}" alt="{{ $product->name }}">
							</div>

							<div id="thumb-slider" class="yt-content-slider full_slider owl-drag" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="10" data-items_column0="4" data-items_column1="3" data-items_column2="4"  data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                                <a data-index="0" class="img thumbnail " data-image="{{ productImage($product->image) }}" title="{{ $product->name }}">
									<img src="{{ productImage($product->image) }}" title="{{ $product->name }}" alt="{{ $product->name }}">
                                </a>
                                <a data-index="1" class="img thumbnail " data-image="{{ productImage($product->image) }}" title="{{ $product->name }}">
									<img src="{{ productImage($product->image2) }}" title="{{ $product->name }}" alt="{{ $product->name }}">
								</a>
                                @if ($product->images)
                                    @foreach (json_decode($product->images, true) as $image)


								<a data-index="{{ $loop->index+2 }}" class="img thumbnail " data-image="{{ productImage($image) }}" title="{{ $product->name }}">
									<img src="{{ productImage($image) }}" title="{{ $product->name }}" alt="{{ $product->name }}">
								</a>
                                    @endforeach
                                @endif
							</div>

						</div>

						<div class="content-product-right col-md-7 col-sm-12 col-xs-12">
							<div class="title-product">
								<h1>{{ $product->name }}</h1>
							</div>
							<!-- Review ---->
							<div class="box-review form-group">
								<div class="ratings">
									<div class="rating-box">
										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
									</div>
								</div>

								<a class="reviews_button" href="#" >0 reviews</a>	|
								<a class="write_review_button" href="#">(Disable)</a>
							</div>
                            <div class="short_description form-group">
                                @if ($product->details)

                                <h4>Overview</h4>
                                {{ $product->details }}
                                @endif
                            </div>
							<div class="product-label form-group">
								<div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
									<span class="price-new" itemprop="price">{{ $product->presentPrice() }}</span>
								</div>
                            <div class="stock"><span>Disponibilité:</span> <span class="status-stock">{{ $stocklevel }}</span></div>
							</div>



							<div id="product">
                                @if ($product->quantity>0)
                                <form action="{{ route('cart.store') }}" method="post">
                                    @csrf
								<div class="form-group box-info-product">
									<div class="option quantity">
										<div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
											<label>Quantité</label>
											<input class="form-control" type="text" name="quantity"
											value="1">
											<input type="hidden" name="product_id" value="50">
											<span class="input-group-addon product_quantity_down">−</span>
											<span class="input-group-addon product_quantity_up">+</span>
										</div>
                                    </div>

									<div class="cart">
                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                            <input type="hidden" name="name" value="{{ $product->name }}">
                                            <input type="hidden" name="price" value="{{ $product->price }}">
                                            <input type="submit" data-toggle="tooltip" title="" value="Acheter" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg" data-original-title="Add to Cart">


                                    </div>


                                </div>
                            </form>
                            @endif

							</div>

						</div>

					</div>
				</div>
                <!-- Product Tabs -->
                @if (!empty($product->description))

				<div class="producttab ">
					<div class="tabsslider  vertical-tabs col-xs-12">
						<ul class="nav nav-tabs col-lg-2 col-sm-3">
							<li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
						</ul>
						<div class="tab-content col-lg-10 col-sm-9 col-xs-12">
							<div id="tab-1" class="tab-pane fade active in">
								{!! $product->description !!}
							</div>
						</div>
					</div>
				</div>
                @endif
				<!-- //Product Tabs -->

				<!-- Related Products -->
			<div class="related titleLine products-list grid module ">
				<h3 class="modtitle">Produits apparentés  </h3>

				<div class="releate-products yt-content-slider products-list" data-rtl="no" data-loop="yes" data-autoplay="no" data-autoheight="no" data-autowidth="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="5" data-items_column1="3" data-items_column2="3" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-hoverpause="yes">
                    @foreach ($mightAlsoLike as $product)
                    <div class="item">
                        <div class="item-inner product-layout transition product-grid">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img">
                                        <a href="{{ route('category.show',$product->slug) }}" target="_self" title="{{ $product->name }}">
                                            <img src="{{ productImage($product->image) }}" class="img-1 img-responsive" alt="{{ $product->name }}">
                                            <img src="{{ productImage($product->image2) }}" class="img-2 img-responsive" alt="{{ $product->name }}">
                                        </a>
                                    </div>

                                    <div class="button-group so-quickview cartinfo--left">

                                @if ($product->quantity>0)
                                <form action="{{ route('cart.store') }}" method="post">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <input type="hidden" name="quantity" value="1">

                                    <input type="hidden" name="name" value="{{ $product->name }}">
                                    <input type="hidden" name="price" value="{{ $product->price }}">
                                        <button type="submit" class="addToCart btn-button" title="Acheter">  <i class="fa fa-shopping-basket"></i>
                                            <span>Acheter </span>
                                        </button>
                                </form>
                                @endif
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">

                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4><a href="{{ route('category.show',$product->slug) }}" title="{{ $product->name }}" target="_self">{{ $product->name }}</a></h4>
                                        <div class="price">{{ $product->presentPrice() }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

				</div>
			</div>

			<!-- end Related  Products-->
			</div>






			</div>


		</div>
		<!--Middle Part End-->
	</div>
	<!-- //Main Container -->
    @endsection
    @section('extra-js')

	<script type="text/javascript" src="{{asset('/js/themejs/homepage.js')}}"></script>
	<script type="text/javascript" src="{{asset('/js/lightslider/lightslider.js')}}"></script>
    @endsection
