
@extends('layout')

@section('content')


<!-- Main Container  -->
<div class="main-container">
    <div id="content">
        <div class="module sohomepage-slider ">
            <div class="yt-content-slider"  data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column0="1" data-items_column1="1" data-items_column2="1"  data-items_column3="1" data-items_column4="1" data-arrows="no" data-pagination="yes" data-lazyload="yes" data-loop="no" data-hoverpause="yes">

                <div class="yt-content-slide">
                    <a href="#"><img src="{{asset('/image/catalog/slideshow/SLIDE3.png')}}" alt="slider3" class="img-responsive"></a>
                </div>
                <div class="yt-content-slide">
                    <a href="#"><img src="{{asset('/image/catalog/slideshow/SLIDE1.png')}}" alt="slider1" class="img-responsive"></a>
                </div>
                <div class="yt-content-slide">
                    <a href="#"><img src="{{asset('/image/catalog/slideshow/SLIDE2.png')}}" alt="slider2" class="img-responsive"></a>
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
                <h3 class="modtitle"><span>Acheter par catégorie</span></h3>
                <div class="modcontent">
                    <div class="cat-wrap theme3 font-title">
                        <div class="yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="7" data-items_column1="4" data-items_column2="4"  data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                            @foreach ($categories as $category)
                            <div class="content-box">
                                <div class="image-cat">
                                    <a href="{{route('category.index',['category'=>$category->slug])}}" title="{{$category->name}}" target="_self">
                                        <img src="{{ productImage($category->image) }}" title="{{$category->name}}" alt="{{$category->name}}" />
                                    </a>
                                </div>
                                <div class="cat-title">
                                  <a href="{{route('category.index',['category'=>$category->slug])}}" title="{{$category->name}}" target="_self">{{$category->name}}</a>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>

            <div class="banners banners1">
                <div class="banner">
                    <a href="#">
                        <img src="{{asset('/image/catalog/banners/id2-banner1.jpg')}}" alt="image">
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="module so-deals-ltr deals-layout2">
                        <h3 class="modtitle"><span>Deals of the week</span></h3>
                        <div class="modcontent">
                            <div id="so_deal_1" class="so-deal style2">
                                <div class="extraslider-inner products-list yt-content-slider"  data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="1" data-items_column1="1" data-items_column2="2"  data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                                    @foreach ($dealofweek as $product)
                                    <div class="item">
                                        <div class="product-thumb">
                                            <div class="row">
                                                <div class="inner">
                                                    <div class="item-left col-lg-6 col-md-5 col-sm-5 col-xs-12">
                                                        <div class="image">
                                                            <a href="{{ route('category.show',$product->slug) }}" target="_self" title="{{ $product->name }}">
                                                                <img src="{{ productImage($product->image) }}" alt="{{ $product->name }}" class="img-responsive">
                                                            </a>
                                                            <div class="button-group so-quickview">
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
                                                    </div>
                                                    <div class="item-right col-lg-6 col-md-7 col-sm-7 col-xs-12">
                                                        <div class="caption">
                                                            <h4><a href="#" target="_self" title="{{ $product->name }}">{{ $product->name }}</a></h4>
                                                            <p class="price">   <span class="price-new">{{ $product->presentPrice() }}</span>
                                                            </p>

                                                            <div class="item-available">
                                                                <div class="row">
                                                                    <p class="col-xs-6 a1">Available: <b>{{ $product->quantity }}</b>
                                                                    </p>
                                                                </div>
                                                                <div class="available"> <span class="color_width" data-title="75%" data-toggle="tooltip" title="75%" style="width: 75%"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <!-- Listing tabs -->
                    <div class="module listingtab-layout2">
                        <h3 class="modtitle"><span>Accessoires</span></h3>
                        <div id="so_listing_tabs_1" class="so-listing-tabs first-load">
                            <div class="loadeding"></div>
                            <div class="ltabs-wrap">
                                <div class="ltabs-tabs-container" data-rtl="yes" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="4" data-md="3" data-sm="2" data-xs="1" data-margin="30">
                                    <!--Begin Tabs-->
                                    <div class="ltabs-tabs-wrap">
                                    <span class="ltabs-tab-selected">Bathroom</span> <span class="ltabs-tab-arrow">▼</span>
                                        <div class="item-sub-cat">
                                            <ul class="ltabs-tabs cf">
                                                <li class="ltabs-tab tab-sel" data-category-id="20" data-active-content=".items-category-20"> <span class="ltabs-tab-label">Accessoires</span> </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <!-- End Tabs-->
                                </div>

                                <div class="ltabs-items-container products-list grid">
                                    <!--Begin Items-->
                                    <div class="ltabs-items ltabs-items-selected items-category-20" data-total="16">
                                        <div class="ltabs-items-inner ltabs-slider">
                                            @foreach ($accessoireProducts as $product)
                                            @if ($loop->iteration%2==1)
                                            <div class="ltabs-item">
                                            @endif
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
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                </div>
                                                                <h4><a href="{{ route('category.show',$product->slug) }}" title="{{ $product->name }}" target="_self">{{ $product->name }}</a></h4>
                                                                <div class="price">{{ $product->presentPrice() }}</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @if ($loop->iteration%2==0)
                                            </div>
                                            @endif

                                            @endforeach

                                        </div>

                                    </div>
                                    <!--End Items-->
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end Listing tabs -->
                </div>
            </div>

            <div class="row sliderimages ">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 "></div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 inner">
                    <div class="slider-images">
                        <div class="yt-content-slider" data-rtl="yes" data-loop="yes" data-autoplay="no" data-autoheight="no" data-autowidth="no" data-delay="4" data-speed="0.6" data-margin="10" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-hoverpause="yes">
                            <div class="item">
                                <a href="#">
                                    <img src="{{asset('/image/catalog/slideshow/1.jpg')}}" alt="image">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="{{asset('/image/catalog/slideshow/2.jpg')}}" alt="image">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="{{asset('/image/catalog/slideshow/3.png')}}" alt="image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12"></div>
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
                                    <li class="ltabs-tab tab-sel" data-category-id="61" data-active-content=".items-category-61"><span class="ltabs-tab-label">Meilleures ventes</span></li>
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
                            <img src="{{asset('/image/catalog/brands/1.png')}}" alt="brand">
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="{{asset('/image/catalog/brands/2.png')}}" alt="brand">
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="{{asset('/image/catalog/brands/3.png')}}" alt="brand">
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="{{asset('/image/catalog/brands/4.png')}}" alt="brand">
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="{{asset('/image/catalog/brands/5.png')}}" alt="brand">
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="{{asset('/image/catalog/brands/6.png')}}" alt="brand">
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="{{asset('/image/catalog/brands/7.png')}}" alt="brand">
                        </a>
                    </div>
                </div>
            </div>

            <div class="module so-latest-blog blog-home blog-home2">
                <h3 class="modtitle"><span>Nos derniers blogs</span></h3>
                <div class="modcontent clearfix">
                    <div class="so-blog-external">
                        <div class="yt-content-slider blog-external" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="4" data-items_column1="3" data-items_column2="2" data-items_column3="2" data-items_column4="1" data-arrows="no" data-pagination="yes" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                            @foreach ($posts as $post)
                            <div class="media">
                                <div class="item">
                                    <div class="media-left">
                                        <a href="{{ route('blog.show',$post->slug) }}" target="_self">
                                            <img src="{{ productImage($post->image) }}" alt="{{$post->title}}" />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="media-content">
                                            <h4 class="media-heading font-title">
                                                <a href="{{ route('blog.show',$post->slug) }}" title="{{$post->title}}" target="_self">{{$post->title}}</a>
                                            </h4>
                                            <div class="media-date-added idx-other">    <i class="fa fa-calendar"></i><span class="media-date-added"> {{$post->created_at}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- //Main Container -->




    @endsection
    @section('extra-js')

<script type="text/javascript" src="{{ asset('/js/modernizr/modernizr-2.6.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/minicolors/jquery.miniColors.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('/js/themejs/homepage.js') }}"></script>

<script type="text/javascript" src="{{ asset('/js/themejs/toppanel.js') }}"></script>
    @endsection
