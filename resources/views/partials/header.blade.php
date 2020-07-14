<!-- Header Container  -->
<header id="header" class=" typeheader-2 no-print">


    <!-- Header center -->
    <div class="header-middle">
        <div class="container">
            <div class="row">
                <!-- Logo -->
                <div class="navbar-logo col-lg-2 col-md-3 col-sm-12 col-xs-12">
                    <div class="logo"><a href="{{route('index')}}"><img src="/image/catalog/logo.png" title="Your Store" alt="Your Store" /></a></div>
                </div>
                <!-- //end Logo -->
                <!-- Search -->
                <div class="middle2 col-lg-7 col-md-6">
                    <div class="search-header-w">
                        <div class="icon-search hidden-lg hidden-md hidden-sm"><i class="fa fa-search"></i></div>
                        <div id="sosearchpro" class="sosearchpro-wrapper so-search ">
                            <form method="GET" action="index.html">
                                <div id="search0" class="search input-group form-group">
                                    <div class="select_category filter_type  icon-select hidden-sm hidden-xs">
                                        <select class="no-border" name="category_id">
                                            <option value="0">All Categories</option>
                                            <option value="78">Apparel</option>
                                            <option value="77">Cables &amp; Connectors</option>
                                            <option value="82">Cameras &amp; Photo</option>
                                            <option value="80">Flashlights &amp; Lamps</option>
                                            <option value="81">Mobile Accessories</option>
                                            <option value="79">Video Games</option>
                                            <option value="20">Jewelry &amp; Watches</option>
                                            <option value="76">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Earings</option>
                                            <option value="26">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wedding Rings</option>
                                            <option value="27">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Men Watches</option>
                                        </select>
                                    </div>

                                    <input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Keyword here..." name="search">
                                    <span class="input-group-btn">
                                    <button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                                <input type="hidden" name="route" value="product/search" />
                            </form>
                        </div>
                    </div>
                </div>
                <!-- //end Search -->

                <div class="middle3 col-lg-3 col-md-3">
                    <!--cart-->
                    <div class="shopping_cart">
                        <div id="cart" class="btn-shopping-cart">

                            <a data-loading-text="Loading... " class="btn-group top_cart dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <div class="shopcart">
                                    <span class="icon-c">
                                    <i class="fa fa-shopping-bag"></i>
                                  </span>
                                    <div class="shopcart-inner">
                                        <p class="text-shopping-cart">
                                            My cart
                                        </p>
                                        @if (Cart::count() > 0)
                                        <span class="total-shopping-cart cart-total-full">
                                        <span class="items_cart">{{ Cart::count() }}</span><span class="items_cart2"> item(s)</span><span class="items_carts"> - {{presentPrice(Cart::total())}}</span>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </a>

                            <ul class="dropdown-menu pull-right shoppingcart-box" role="menu">
                                @if (Cart::count() > 0)
                                <li>
                                    <table class="table table-striped">
                                        <tbody>

                                            @foreach (Cart::all() as $item)
                                            <tr>
                                                <td class="text-center" style="width:70px">
                                                    <a href="{{ route('category.show', $item->product->slug) }}">
                                                        <img src="{{ productImage($item->product->image) }}" style="width:70px;height:70px" alt="{{ $item->product->name }}" title="{{ $item->product->name }}" class="preview">
                                                    </a>
                                                </td>
                                                <td class="text-left"> <a class="cart_product_name" href="{{ route('category.show', $item->product->slug) }}">{{ $item->product->name }}</a>
                                                </td>
                                                <td class="text-center">x{{ $item->qty }}</td>
                                                <td class="text-center">{{ $item->product->presentPrice() }}</td>
                                                <td class="text-right">
                                                    <a href="product.html" class="fa fa-edit"></a>
                                                </td>
                                                <td class="text-right">
                                                    <form action="{{ route('cart.destroy', $item->__raw_id) }}" class="inline" method="post">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" data-toggle="tooltip" title="Remove" class="fa fa-times fa-delete" onClick=""></button>
                                                    </form>
                                                    <!--<a onclick="cart.remove('2');" class="fa fa-times fa-delete"></a>-->
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </li>
                                <li>
                                    <div>
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td class="text-left"><strong>Sub-Total</strong>
                                                    </td>
                                                    <td class="text-right">{{presentPrice(Cart::total())}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left"><strong>Total</strong>
                                                    </td>
                                                    <td class="text-right">{{presentPrice(Cart::total())}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    <p class="text-right"> <a class="btn view-cart" href="{{ route('cart.index') }}"><i class="fa fa-shopping-cart"></i>View Cart</a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart" href="{{route('checkout.index')}}"><i class="fa fa-share"></i>Checkout</a>
                                        </p>
                                    </div>
                                </li>
                                @else

                                            <li class="text-center">No item in cart</li>
                                            @endif
                            </ul>
                        </div>

                    </div>
                    <!--//cart-->


                </div>


            </div>

        </div>
    </div>
    <!-- //Header center -->

    <!-- Header Bottom -->
    <div class="header-bottom hidden-compact">
        <div class="container">
            <div class="row">

                <div class="bottom1 menu-vertical col-lg-2 col-md-3">
                    <!-- Secondary menu -->
                    <div class="responsive so-megamenu megamenu-style-dev">
                        <div class="so-vertical-menu ">
                            <nav class="navbar-default">

                                <div class="container-megamenu vertical">
                                    <div id="menuHeading">
                                        <div class="megamenuToogle-wrapper">
                                            <div class="megamenuToogle-pattern">
                                                <div class="container">
                                                    <div>
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                    </div>
                                                    All Categories
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="navbar-header">
                                        <button type="button" id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle">
                                            <i class="fa fa-bars"></i>
                                            <span>  All Categories     </span>
                                        </button>
                                    </div>
                                    <div class="vertical-wrapper" >
                                        <span id="remove-verticalmenu" class="fa fa-times"></span>
                                        <div class="megamenu-pattern">
                                            <div class="container-mega">
                                                <ul class="megamenu">
                                                    @foreach ($categories as $category)
                                                    <li class="item-vertical">
                                                        <p class="close-menu"></p>
                                                        <a href="{{route('category.index',['category'=>$category->slug])}}" class="clearfix">
                                                            <span>{{$category->name}}</span>
                                                        </a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                        </div>
                    </div>
                    <!-- // end Secondary menu -->
                </div>
                <!-- Main menu -->
                <div class="main-menu col-lg-6 col-md-9">
                    <div class="responsive so-megamenu megamenu-style-dev">
                        <nav class="navbar-default">
                            <div class=" container-megamenu  horizontal open ">
                                <div class="navbar-header">
                                    <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="megamenu-wrapper">
                                    <span id="remove-megamenu" class="fa fa-times"></span>
                                    <div class="megamenu-pattern">
                                        <div class="container-mega">
                                            <ul class="megamenu" data-transition="slide" data-animationtime="250">
                                                <li class="home hover">
                                                    <a href="/">Home</a>

                                                </li>
                                                <li class="">
                                                    <a href="{{route('category.index',['category'=>'smartphone'])}}">Smartphone</a>

                                                </li>
                                                <li class="">
                                                    <a href="{{route('category.index',['category'=>'mobile-basic'])}}">Mobile Basic</a>

                                                </li>
                                                <li class="">
                                                    <a href="{{route('category.index',['category'=>'camera'])}}">Camera</a>

                                                </li>
                                                <li class="">
                                                    <a href="{{route('category.index',['category'=>'tablette'])}}">Tablette</a>

                                                </li>
                                                <li class="">
                                                    <a href="{{route('category.index',['category'=>'accessoire'])}}">Accessories</a>

                                                </li>


                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- //end Main menu -->


                <div class="bottom2 col-lg-4 hidden-md col-sm-6 col-xs-8">
                    <div class="signin-w font-title hidden-sm hidden-xs">
                        <ul class="signin-link blank">
                            @guest
                            <li class="log login"><i class="fa fa-lock"></i> <a class="link-lg" href="{{route('login')}}">Login </a> or <a href="{{route('register')}}">Register</a></li>
                            @else
                        <li style="padding-right:10px"><a href="{{ route('users.edit') }}">My account</a><li>
                            <li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            @endguest

                        </ul>
                    </div>
                    <div class="telephone hidden-xs hidden-sm hidden-md">
                        <ul class="blank"> <li><a href="#"><i class="fa fa-truck"></i>track your order</a></li> <li><a href="#"><i class="fa fa-phone-square"></i>Hotline (+123)4 567 890</a></li> </ul>
                    </div>


                </div>


            </div>
        </div>

    </div>

    </header>
    <!-- //Header Container  -->
