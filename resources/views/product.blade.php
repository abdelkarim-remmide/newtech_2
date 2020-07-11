
@extends('layout')
@section('title')

@endsection
@section('extra-css')

<link href="/js/lightslider/lightslider.css" rel="stylesheet">
@endsection
@section('content')



	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Smartphone & Tablets</a></li>
			<li><a href="#">{{ $product->name }}</a></li>

		</ul>

		<div class="row">

			<!--Left Part Start -->
			<aside class="col-sm-4 col-md-3 content-aside" id="column-left">
				<div class="module category-style">
                	<h3 class="modtitle">Categories</h3>
                	<div class="modcontent">
                		<div class="box-category">
                			<ul id="cat_accordion" class="list-group">
                				<li class="hadchild"><a href="category.html" class="cutom-parent">Smartphone & Tablets</a>   <span class="button-view  fa fa-plus-square-o"></span>
                					<ul style="display: block;">
                						<li><a href="category.html">Men's Watches</a></li>
                						<li><a href="category.html">Women's Watches</a></li>
                						<li><a href="category.html">Kids' Watches</a></li>
                						<li><a href="category.html">Accessories</a></li>
                					</ul>
                				</li>
                				<li class="hadchild"><a class="cutom-parent" href="category.html">Electronics</a>   <span class="button-view  fa fa-plus-square-o"></span>
                					<ul style="display: none;">
                						<li><a href="category.html">Cycling</a></li>
                						<li><a href="category.html">Running</a></li>
                						<li><a href="category.html">Swimming</a></li>
                						<li><a href="category.html">Football</a></li>
                						<li><a href="category.html">Golf</a></li>
                						<li><a href="category.html">Windsurfing</a></li>
                					</ul>
                				</li>
                				<li class="hadchild"><a href="category.html" class="cutom-parent">Shoes</a>   <span class="button-view  fa fa-plus-square-o"></span>
                					<ul style="display: none;">
                						<li><a href="category.html">Sub Categories</a></li>
                						<li><a href="category.html">Sub Categories</a></li>
                						<li><a href="category.html">Sub Categories</a></li>
                						<li><a href="category.html">Sub Categories</a></li>
                						<li><a href="category.html">Sub Categories</a></li>
                					</ul>
                				</li>
                				<li class="hadchild"><a href="category.html" class="cutom-parent">Watches</a>  <span class="button-view  fa fa-plus-square-o"></span>
                					<ul style="display: none;">
                						<li><a href="category.html">Men's Watches</a></li>
                						<li><a href="category.html">Women's Watches</a></li>
                						<li><a href="category.html">Kids' Watches</a></li>
                						<li><a href="category.html">Accessories</a></li>
                					</ul>
                				</li>
                				<li class="hadchild"><a href="category.html" class="cutom-parent">Jewellery</a>    <span class="button-view  fa fa-plus-square-o"></span>
                					<ul style="display: none;">
                						<li><a href="category.html">Sub Categories</a></li>
                						<li><a href="category.html">Sub Categories</a></li>
                						<li><a href="category.html">Sub Categories</a></li>
                						<li><a href="category.html">Sub Categories</a></li>
                						<li><a href="category.html">Sub Categories</a></li>
                					</ul>
                				</li>
                				<li class=""><a href="category.html" class="cutom-parent">Health &amp; Beauty</a>  <span class="dcjq-icon"></span></li>
                				<li class=""><a href="category.html" class="cutom-parent">Kids &amp; Babies</a>    <span class="dcjq-icon"></span></li>
                				<li class=""><a href="category.html" class="cutom-parent">Sports</a>  <span class="dcjq-icon"></span></li>
                				<li class=""><a href="category.html" class="cutom-parent">Home &amp; Garden</a><span class="dcjq-icon"></span></li>
                				<li class=""><a href="category.html" class="cutom-parent">Wines &amp; Spirits</a>  <span class="dcjq-icon"></span></li>
                			</ul>
                		</div>


                	</div>
                </div>
            	<div class="module product-simple">
                    <h3 class="modtitle">
                        <span>Latest products</span>
                    </h3>
                    <div class="modcontent">
                        <div class="extraslider" >
                            <!-- Begin extraslider-inner -->
                            <div class=" extraslider-inner">
                                <div class="item ">
                                    <div class="product-layout item-inner style1 ">
                                        <div class="item-image">
                                            <div class="item-img-info">
                                                <a href="#" target="_self" title="Mandouille short ">
                                                    <img src="image/catalog/demo/product/80/8.jpg" alt="Mandouille short">
                                                    </a>
                                            </div>

                                        </div>
                                        <div class="item-info">
                                            <div class="item-title">
                                                <a href="#" target="_self" title="Mandouille short">Mandouille short </a>
                                            </div>
                                            <div class="rating">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <div class="content_price price">
                                                <span class="price-new product-price">$55.00 </span>&nbsp;&nbsp;

                                                <span class="price-old">$76.00 </span>&nbsp;

                                            </div>
                                        </div>
                                        <!-- End item-info -->
                                        <!-- End item-wrap-inner -->
                                    </div>
                                    <!-- End item-wrap -->
                                    <div class="product-layout item-inner style1 ">
                                        <div class="item-image">
                                            <div class="item-img-info">
                                                <a href="#" target="_self" title="Xancetta bresao ">
                                                        <img src="image/catalog/demo/product/80/7.jpg" alt="Xancetta bresao">
                                                        </a>
                                            </div>

                                        </div>
                                        <div class="item-info">
                                            <div class="item-title">
                                                <a href="#" target="_self" title="Xancetta bresao">
                                                            Xancetta bresao
                                                        </a>
                                            </div>
                                            <div class="rating">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <div class="content_price price">
                                                <span class="price-new product-price">$80.00 </span>&nbsp;&nbsp;

                                                <span class="price-old">$89.00 </span>&nbsp;



                                            </div>
                                        </div>
                                        <!-- End item-info -->
                                        <!-- End item-wrap-inner -->
                                    </div>
                                    <!-- End item-wrap -->
                                    <div class="product-layout item-inner style1 ">
                                        <div class="item-image">
                                            <div class="item-img-info">
                                                <a href="#" target="_self" title="Sausage cowbee ">
                                                            <img src="image/catalog/demo/product/80/6.jpg" alt="Sausage cowbee">
                                                            </a>
                                            </div>

                                        </div>
                                        <div class="item-info">
                                            <div class="item-title">
                                                <a href="#" target="_self" title="Sausage cowbee">
                                                            Sausage cowbee
                                                        </a>
                                            </div>
                                            <div class="rating">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>

                                            <div class="content_price price">
                                                <span class="price product-price">
                                                                $66.00
                                                            </span>
                                            </div>
                                        </div>
                                        <!-- End item-info -->
                                        <!-- End item-wrap-inner -->
                                    </div>
                                    <!-- End item-wrap -->
                                    <div class="product-layout item-inner style1 ">
                                        <div class="item-image">
                                            <div class="item-img-info">
                                                <a href="#" target="_self" title="Chicken swinesha ">
                                                <img src="image/catalog/demo/product/80/5.jpg" alt="Chicken swinesha">
                                                </a>
                                            </div>

                                        </div>
                                        <div class="item-info">
                                            <div class="item-title">
                                                <a href="#" target="_self" title="Chicken swinesha">
                                                            Chicken swinesha
                                                        </a>
                                            </div>
                                             <div class="rating">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <div class="content_price price">
                                                <span class="price-new product-price">$45.00 </span>&nbsp;&nbsp;

                                                <span class="price-old">$56.00 </span>&nbsp;



                                            </div>
                                        </div>
                                        <!-- End item-info -->
                                        <!-- End item-wrap-inner -->
                                    </div>
                                    <!-- End item-wrap -->
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

				<div class="product-view row">
					<div class="left-content-product">

						<div class="content-product-left class-honizol col-md-5 col-sm-12 col-xs-12">
							<div class="large-image  ">
								<img itemprop="image" class="product-image-zoom" src="{{ productImage($product->image) }}" data-zoom-image="{{ productImage($product->image) }}" title="{{ $product->name }}" alt="{{ $product->name }}">
							</div>
							<a class="thumb-video pull-left" href="https://www.youtube.com/watch?v=HhabgvIIXik"><i class="fa fa-youtube-play"></i></a>

							<div id="thumb-slider" class="yt-content-slider full_slider owl-drag" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="10" data-items_column0="4" data-items_column1="3" data-items_column2="4"  data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                                <a data-index="0" class="img thumbnail " data-image="{{ productImage($product->image) }}" title="{{ $product->name }}">
									<img src="{{ productImage($product->image) }}" title="{{ $product->name }}" alt="{{ $product->name }}">
								</a>
                                @if ($product->images)
                                    @foreach (json_decode($product->images, true) as $image)


								<a data-index="{{ $loop->index+1 }}" class="img thumbnail " data-image="{{ productImage($image) }}" title="{{ $product->name }}">
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

								<a class="reviews_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">0 reviews</a>	|
								<a class="write_review_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">Write a review</a>
							</div>
                            <div class="short_description form-group">
                                <h4>Overview</h4>
                                {{ $product->details }}
                            </div>
							<div class="product-label form-group">
								<div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
									<span class="price-new" itemprop="price">{{ $product->presentPrice() }}</span>
								</div>
								<div class="stock"><span>Availability:</span> <span class="status-stock">In Stock</span></div>
							</div>



							<div id="product">

                                <form action="{{ route('cart.store') }}" method="post">
                                    @csrf
								<div class="form-group box-info-product">
									<div class="option quantity">
										<div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
											<label>Qty</label>
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
                                            <input type="submit" data-toggle="tooltip" title="" value="Add to Cart" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg" onclick="cart.add('42', '1');" data-original-title="Add to Cart">


									</div>

                                </div>
                            </form>

							</div>

						</div>

					</div>
				</div>
				<!-- Product Tabs -->
				<div class="producttab ">
					<div class="tabsslider  vertical-tabs col-xs-12">
						<ul class="nav nav-tabs col-lg-2 col-sm-3">
							<li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
							<li class="item_nonactive"><a data-toggle="tab" href="#tab-review">Reviews (1)</a></li>
							<li class="item_nonactive"><a data-toggle="tab" href="#tab-4">Tags</a></li>
							<li class="item_nonactive"><a data-toggle="tab" href="#tab-5">Custom Tab</a></li>
						</ul>
						<div class="tab-content col-lg-10 col-sm-9 col-xs-12">
							<div id="tab-1" class="tab-pane fade active in">
								{{!! $product->description !!}}
							</div>
							<div id="tab-review" class="tab-pane fade">
								<form>
									<div id="review">
										<table class="table table-striped table-bordered">
											<tbody>
												<tr>
													<td style="width: 50%;"><strong>Super Administrator</strong></td>
													<td class="text-right">29/07/2015</td>
												</tr>
												<tr>
													<td colspan="2">
														<p>Best this product opencart</p>
														<div class="ratings">
															<div class="rating-box">
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
															</div>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
										<div class="text-right"></div>
									</div>
									<h2 id="review-title">Write a review</h2>
									<div class="contacts-form">
										<div class="form-group"> <span class="icon icon-user"></span>
											<input type="text" name="name" class="form-control" value="Your Name" onblur="if (this.value == '') {this.value = 'Your Name';}" onfocus="if(this.value == 'Your Name') {this.value = '';}">
										</div>
										<div class="form-group"> <span class="icon icon-bubbles-2"></span>
											<textarea class="form-control" name="text" onblur="if (this.value == '') {this.value = 'Your Review';}" onfocus="if(this.value == 'Your Review') {this.value = '';}">Your Review</textarea>
										</div>
										<span style="font-size: 11px;"><span class="text-danger">Note:</span>						HTML is not translated!</span>

										<div class="form-group">
										 <b>Rating</b> <span>Bad</span>&nbsp;
										<input type="radio" name="rating" value="1"> &nbsp;
										<input type="radio" name="rating"
										value="2"> &nbsp;
										<input type="radio" name="rating"
										value="3"> &nbsp;
										<input type="radio" name="rating"
										value="4"> &nbsp;
										<input type="radio" name="rating"
										value="5"> &nbsp;<span>Good</span>

										</div>
										<div class="buttons clearfix"><a id="button-review" class="btn buttonGray">Continue</a></div>
									</div>
								</form>
							</div>
							<div id="tab-4" class="tab-pane fade">
								<a href="#">Monitor</a>,
								<a href="#">Apple</a>
							</div>
							<div id="tab-5" class="tab-pane fade">
								<h3 class="custom-color">Take a trivial example which of us ever undertakes</h3>
								<p>Lorem ipsum dolor sit amet, consetetur
									sadipscing elitr, sed diam nonumy eirmod
									tempor invidunt ut labore et dolore
									magna aliquyam erat, sed diam voluptua.
									At vero eos et accusam et justo duo
									dolores et ea rebum. Stet clita kasd
									gubergren, no sea takimata sanctus est
									Lorem ipsum dolor sit amet. Lorem ipsum
									dolor sit amet, consetetur sadipscing
									elitr, sed diam nonumy eirmod tempor
									invidunt ut labore et dolore magna aliquyam
									erat, sed diam voluptua. </p>
								<p>At vero eos et accusam et justo duo dolores
									et ea rebum. Stet clita kasd gubergren,
									no sea takimata sanctus est Lorem ipsum
									dolor sit amet. Lorem ipsum dolor sit
									amet, consetetur sadipscing elitr.</p>
									<ul class="marker-simple-list two-columns">
						<li>Nam liberempore</li>
						<li>Cumsoluta nobisest</li>
						<li>Eligendptio cumque</li>
						<li>Nam liberempore</li>
						<li>Cumsoluta nobisest</li>
						<li>Eligendptio cumque</li>
						</ul>
								<p>Sed diam nonumy eirmod tempor invidunt
									ut labore et dolore magna aliquyam erat,
									sed diam voluptua. At vero eos et accusam
									et justo duo dolores et ea rebum. Stet
									clita kasd gubergren, no sea takimata
									sanctus est Lorem ipsum dolor sit amet.</p>
							</div>
						</div>
					</div>
				</div>
				<!-- //Product Tabs -->

				<!-- Related Products -->
			<div class="related titleLine products-list grid module ">
				<h3 class="modtitle">Related Products  </h3>

				<div class="releate-products yt-content-slider products-list" data-rtl="no" data-loop="yes" data-autoplay="no" data-autoheight="no" data-autowidth="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="5" data-items_column1="3" data-items_column2="3" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-hoverpause="yes">
                    @foreach ($mightAlsoLike as $product)
                    <div class="item">
                        <div class="item-inner product-layout transition product-grid">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img">
                                        <a href="{{ route('category.show',$product->slug) }}" target="_self" title="{{ $product->name }}">
                                            <img src="{{ productImage($product->image) }}" class="img-1 img-responsive" alt="{{ $product->name }}">
                                            <img src="{{ productImage($product->image) }}" class="img-2 img-responsive" alt="{{ $product->name }}">
                                        </a>
                                    </div>

                                    <div class="button-group so-quickview cartinfo--left">
                                        <button type="button" class="addToCart btn-button" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                            <span>Add to cart </span>
                                        </button>
                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                        </button>
                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                        </button>
                                        <!--quickview-->
                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                        <!--end quickview-->
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

	<script type="text/javascript" src="/js/themejs/homepage.js"></script>
	<script type="text/javascript" src="/js/lightslider/lightslider.js"></script>
    @endsection
