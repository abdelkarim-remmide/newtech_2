
@extends('layout')

@section('content')


<!-- Main Container  -->
<div class="main-container">
    <div id="content">
        <div class="module sohomepage-slider ">
            <div class="yt-content-slider"  data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column0="1" data-items_column1="1" data-items_column2="1"  data-items_column3="1" data-items_column4="1" data-arrows="no" data-pagination="yes" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                <div class="yt-content-slide">
                    <a href="#"><img src="/image/catalog/slideshow/1.jpg" alt="slider1" class="img-responsive"></a>
                </div>
                <div class="yt-content-slide">
                    <a href="#"><img src="/image/catalog/slideshow/2.jpg" alt="slider2" class="img-responsive"></a>
                </div>
                <div class="yt-content-slide">
                    <a href="#"><img src="/image/catalog/slideshow/3.png" alt="slider3" class="img-responsive"></a>
                </div>
            </div>

            <div class="loadeding"></div>
        </div>

        <div class="container">
            <div class="block-policy2">
                <ul>
                    <li class="item-1">
                        <div class="item-inner">
                            <div class="icon icon1"></div>
                            <div class="content"> <a href="#">free delivery</a>
                                <p>From $59.89</p>
                            </div>
                        </div>
                    </li>
                    <li class="item-2">
                        <div class="item-inner">
                            <div class="icon icon2"></div>
                            <div class="content"> <a href="#">support 24/7</a>
                                <p>Online 24 hours</p>
                            </div>
                        </div>
                    </li>
                    <li class="item-3">
                        <div class="item-inner">
                            <div class="icon icon3"></div>
                            <div class="content"> <a href="#">free return</a>
                                <p>365 a day</p>
                            </div>
                        </div>
                    </li>
                    <li class="item-4">
                        <div class="item-inner">
                            <div class="icon icon4"></div>
                            <div class="content"> <a href="#">payment method</a>
                                <p>secure payment</p>
                            </div>
                        </div>
                    </li>
                    <li class="item-5">
                        <div class="item-inner">
                            <div class="icon icon5"></div>
                            <div class="content"> <a href="#">big saving</a>
                                <p>weekend sales</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="so-categories module custom-slidercates">
                <h3 class="modtitle"><span>Shop by Categories</span></h3>
                <div class="modcontent">
                    <div class="cat-wrap theme3 font-title">
                        <div class="yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="7" data-items_column1="4" data-items_column2="4"  data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                            <div class="content-box">
                                <div class="image-cat">
                                    <a href="{{route('category.index',['category'=>'camera'])}}" title="Camera" target="_self">
                                        <img src="/image/catalog/demo/category/cate1.jpg" title="Camera" alt="Camera" />
                                    </a>
                                </div>
                                <div class="cat-title">
                                  <a href="{{route('category.index',['category'=>'camera'])}}" title="Camera " target="_self">Camera</a>
                                </div>
                            </div>
                            <div class="content-box">
                                <div class="image-cat">
                                    <a href="{{route('category.index',['category'=>'mobile-basic'])}}" title="Mobile Basic" target="_self">
                                        <img src="/image/catalog/demo/category/cate2.jpg" title="Mobile Basic" alt="Mobile Basic" />
                                    </a>
                                </div>
                                <div class="cat-title">
                                  <a href="{{route('category.index',['category'=>'mobile-basic'])}}" title="Mobile Basic" target="_self">Mobile Basic</a>
                                </div>
                            </div>
                            <div class="content-box">
                                <div class="image-cat">
                                    <a href="{{route('category.index',['category'=>'smartphone'])}}" title="Smartphone" target="_self">
                                        <img src="/image/catalog/demo/category/cate3.jpg" title="Smartphone" alt="Smartphone" />
                                    </a>
                                </div>
                                <div class="cat-title">
                                  <a href="{{route('category.index',['category'=>'smartphone'])}}" title="Smartphone" target="_self">Smartphone</a>
                                </div>
                            </div>
                            <div class="content-box">
                                <div class="image-cat">
                                    <a href="{{route('category.index',['category'=>'tablette'])}}" title="Tablette" target="_self">
                                        <img src="/image/catalog/demo/category/cate4.jpg" title="Tablette" alt="Tablette" />
                                    </a>
                                </div>
                                <div class="cat-title">
                                  <a href="{{route('category.index',['category'=>'tablette'])}}" title="Tablette" target="_self">Tablette</a>
                                </div>
                            </div>
                            <div class="content-box">
                                <div class="image-cat">
                                    <a href="{{route('category.index',['category'=>'accessoire'])}}" title="Accessories" target="_self">
                                        <img src="/image/catalog/demo/category/cate5.jpg" title="Accessories" alt="Accessories" />
                                    </a>
                                </div>
                                <div class="cat-title">
                                  <a href="{{route('category.index',['category'=>'accessoire'])}}" title="Accessories" target="_self">Accessories</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="banners banners1">
                <div class="banner">
                    <a href="#">
                        <img src="image/catalog/banners/id2-banner1.jpg" alt="image">
                    </a>
                </div>
            </div>




            <!-- Listing tabs order -->
            <div class="module layout2-listingtab2">

                <div id="so_listing_tabs_2" class="so-listing-tabs first-load">
                    <div class="loadeding"></div>
                    <div class="ltabs-wrap">
                        <div class="ltabs-tabs-container" data-rtl="yes" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="5" data-md="4" data-sm="2" data-xs="1" data-margin="30">
                            <!--Begin Tabs-->
                            <div class="ltabs-tabs-wrap">
                                <span class='ltabs-tab-selected'></span>
                                <span class="ltabs-tab-arrow">▼</span>
                                <ul class="ltabs-tabs cf list-sub-cat font-title">
                                    <li class="ltabs-tab tab-sel" data-category-id="61" data-active-content=".items-category-61"><span class="ltabs-tab-label">Best sellers</span></li>
                                </ul>
                            </div>
                            <!-- End Tabs-->
                        </div>
                        <div class="wap-listing-tabs ltabs-items-container products-list grid">
                            <!--Begin Items-->
                            <div class="ltabs-items ltabs-items-selected items-category-61" data-total="10">
                                <div class="ltabs-items-inner ltabs-slider">
                                    @foreach ($products as $product)
                                    <div class="ltabs-item">
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




                            <!--End Items-->
                        </div>

                    </div>

                </div>
            </div>
            <!-- end Listing tabs order -->

            <div class="slider-brands">
                <div class="yt-content-slider contentslider" data-rtl="no" data-loop="yes" data-autoplay="no" data-autoheight="no" data-autowidth="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column0="8" data-items_column1="6" data-items_column2="3" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-hoverpause="yes">
                    <div class="item">
                        <a href="#">
                            <img src="/image/catalog/brands/1.png" alt="brand">
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="/image/catalog/brands/2.png" alt="brand">
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="/image/catalog/brands/3.png" alt="brand">
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="/image/catalog/brands/4.png" alt="brand">
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="/image/catalog/brands/5.png" alt="brand">
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="/image/catalog/brands/6.png" alt="brand">
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="/image/catalog/brands/7.png" alt="brand">
                        </a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- //Main Container -->




    @endsection
    @section('extra-js')

<script type="text/javascript" src="/js/modernizr/modernizr-2.6.2.min.js"></script>
<script type="text/javascript" src="/js/minicolors/jquery.miniColors.min.js"></script>

<script type="text/javascript" src="/js/themejs/homepage.js"></script>

<script type="text/javascript" src="/js/themejs/toppanel.js"></script>
    @endsection
