
@extends('layout')

@section('content')


	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">{{$categoryName}}</a></li>
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
                                    @foreach ($category->childCategories as $subCat)
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
            	<div class="module product-simple">
                    <h3 class="modtitle">
                        <span>Latest products</span>
                    </h3>
                    <div class="modcontent">
                        <div class="extraslider" >
                            <!-- Begin extraslider-inner -->
                            <div class="yt-content-slider extraslider-inner">
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
        		<div class="products-category">
                    <h3 class="title-category ">{{$categoryName}}</h3>
        			<div class="category-derc">
        				<div class="row">
        					<div class="col-sm-12">
        						<div class="banners">
        							<div>
        								<a  href="#"><img src="image/catalog/demo/category/img-cate.jpg" alt="img cate"><br></a>
        							</div>
        						</div>

        					</div>
        				</div>
        			</div>
        			<!-- Filters -->
                    <div class="product-filter product-filter-top filters-panel">
                        <div class="row">
                            <div class="col-md-5 col-sm-3 col-xs-12 view-mode">

                                    <div class="list-view">
                                        <button class="btn btn-default grid active" data-view="grid" data-toggle="tooltip"  data-original-title="Grid"><i class="fa fa-th"></i></button>
                                        <button class="btn btn-default list" data-view="list" data-toggle="tooltip" data-original-title="List"><i class="fa fa-th-list"></i></button>
                                    </div>

                            </div>
                            <div class="short-by-show form-inline text-right col-md-7 col-sm-9 col-xs-12">
                                <div class="form-group short-by">
                                    <label class="control-label" for="input-sort">Sort By:</label>
                                    <select id="input-sort" class="form-control"
                                    onchange="location = this.value;">
                                        <option value="" @if (!request()->sort) selected="selected" @endif>Default</option>
                                        <option value="a_z" @if (request()->sort == 'a_z') selected="selected" @endif>Name (A - Z)</option>
                                        <option value="z_a" @if (request()->sort == 'z_a') selected="selected" @endif>Name (Z - A)</option>
                                        <option value="low_high" @if (request()->sort == 'low_high') selected="selected" @endif>Price (Low &gt; High)</option>
                                        <option value="high_low" @if (request()->sort == 'high_low') selected="selected" @endif>Price (High &gt; Low)</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="input-limit">Show:</label>
                                    <select id="input-limit" class="form-control" onchange="location = this.value;">
                                        <option value="15" @if (request()->pagination == '15') selected="selected" @endif>15</option>
                                        <option value="25" @if (request()->pagination == '25') selected="selected" @endif>25</option>
                                        <option value="50" @if (request()->pagination == '50') selected="selected" @endif>50</option>
                                        <option value="75" @if (request()->pagination == '75') selected="selected" @endif>75</option>
                                        <option value="100" @if (request()->pagination == '100') selected="selected" @endif>100</option>
                                    </select>
                                </div>
                            </div>
                            <!--<div class="box-pagination col-md-3 col-sm-4 col-xs-12 text-right">
                                <ul class="pagination">
                                    <li class="active"><span>1</span></li>
                                    <li><a href="">2</a></li><li><a href="">&gt;</a></li>
                                    <li><a href="">&gt;|</a></li>
                                </ul>
                            </div>-->
                        </div>
                    </div>
                    <!-- //end Filters -->
        			<!--changed listings-->
                    <div class="products-list row nopadding-xs so-filter-gird">
                        @if (count($products))
                        @foreach ($products as $product)
                        <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img">
                                        <a href="{{ route('category.show',$product->slug) }}" target="_self" title="{{ $product->name }}">
                                            <img src="{{ productImage($product->image) }}" class="img-1 img-responsive" alt="image">
                                            <img src="{{ productImage($product->image) }}" class="img-2 img-responsive" alt="image">
                                        </a>
                                    </div>
                                    <div class="box-label"> <span class="label-product label-sale"> -16% </span></div>
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
                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4><a href="{{ route('category.show',$product->slug) }}" title="{{ $product->name }}" target="_self">{{ $product->name }}</a></h4>
                                        <div class="price"> <span class="price-new">{{ $product->presentPrice() }}</span>
                                        </div>
                                        <div class="description item-desc">
                                        <p>{{ $product->description }}</p>
                                        </div>
                                        <div class="list-block">
                                            <button class="addToCart btn-button" type="button" title="Add to Cart" onclick="cart.add('101', '1');"><i class="fa fa-shopping-basket"></i>
                                            </button>
                                            <button class="wishlist btn-button" type="button" title="Add to Wish List" onclick="wishlist.add('101');"><i class="fa fa-heart"></i>
                                            </button>
                                            <button class="compare btn-button" type="button" title="Compare this Product" onclick="compare.add('101');"><i class="fa fa-refresh"></i>
                                            </button>
                                            <!--quickview-->
                                            <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i></a>
                                            <!--end quickview-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach


                        @else
                            <div class="text-center">No product</div>
                        @endif




                    </div>
        			<!--// End Changed listings-->
        			<!-- Filters -->
        			<div class="product-filter product-filter-bottom filters-panel">
                        <div class="row">
                            <div class="col-sm-6 text-left"></div>
                            @if (count($products))
                            <div class="text-center box-pagination">{{ $products->appends(request()->input())->links() }}</div>
                            @endif
                        </div>
                    </div>
        			<!-- //end Filters -->

        		</div>

        	</div>


        	<!--Middle Part End-->
        </div>
    </div>
	<!-- //Main Container -->

    @endsection
    @section('extra-js')
    <script type="text/javascript"><!--
        $('#input-sort').change(function(){
            @if (request()->pagination)
            window.location.href = "{{ route('category.index',['category'=>request()->category,'pagination'=>request()->pagination]) }}&sort="+$(this).val()
            @else
            window.location.href = "{{ route('category.index',['category'=>request()->category]) }}&sort="+$(this).val()
            @endif

        })

        $('#input-limit').change(function(){
            @if (request()->sort)
            window.location.href = "{{ route('category.index',['category'=>request()->category,'sort'=>request()->sort]) }}&pagination="+$(this).val()
            @else
            window.location.href = "{{ route('category.index',['category'=>request()->category]) }}&pagination="+$(this).val()
            @endif
        })
        // Check if Cookie exists

            if($.cookie('display')){
                view = $.cookie('display');
            }else{
                view = 'grid';
            }
            if(view) display(view);
        //--></script>
    @endsection
