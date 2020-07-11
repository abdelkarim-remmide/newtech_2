@extends('layout')

@section('content')

<!-- Main Container  -->
<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Shopping Cart</a></li>
    </ul>
    <div class="row">

        @if (session()->has('success_message'))
        <div class="alert alert-success">
            {{ session()->get('success_message') }}
        </div>
        @endif

        @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>

    <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-12">
            <h2 class="title">Shopping Cart</h2>
            @if (Cart::count() > 0)
            <div class="table-responsive form-group">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td class="text-center">Image</td>
                            <td class="text-left">Product Name</td>
                            <td class="text-left">Quantity</td>
                            <td class="text-right">Unit Price</td>
                            <td class="text-right">Total</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (Cart::all() as $item)
                        <tr>
                            <td class="text-center"><a href="{{ route('category.show', $item->product->slug) }}"><img
                                        width="70px" src="{{ productImage($item->product->image) }}"
                                        alt="{{ $item->product->name }}" title="{{ $item->product->name }}"
                                        class="img-thumbnail" /></a></td>
                            <td class="text-left"><a
                                    href="{{ route('category.show', $item->product->slug) }}">{{ $item->product->name }}</a><br />
                            </td>
                            <td class="text-left" width="200px">
                                <div class="input-group btn-block quantity">
                                    <input type="text" name="quantity" value="{{ $item->qty }}" size="{{ $item->qty }}"
                                        class="form-control" />
                                    <span class="input-group-btn">
                                        <button type="submit" data-toggle="tooltip" title="Update"
                                            class="btn btn-primary quantity-button" data-id="{{$item->__raw_id}}"><i
                                                class="fa fa-clone"></i></button>
                                        <form action="{{ route('cart.destroy', $item->__raw_id) }}" class="inline"
                                            method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" data-toggle="tooltip" title="Remove"
                                                class="btn btn-danger" onClick=""><i
                                                    class="fa fa-times-circle"></i></button>
                                        </form>

                                    </span></div>
                            </td>
                            <td class="text-right">{{ $item->product->presentPrice() }}</td>
                            <td class="text-right">{{ presentPrice($item->total) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <h3 class="text-center">No item in cart</h3>
            @endif

            <div class="row">
                <div class="col-sm-4 col-sm-offset-8">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td class="text-right">
                                    <strong>Sub-Total:</strong>
                                </td>
                                <td class="text-right">{{presentPrice(Cart::total())}}</td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <strong>Total:</strong>
                                </td>
                                <td class="text-right">{{presentPrice(Cart::total())}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="buttons">
                <div class="pull-left"><a href="{{route('index')}}" class="btn btn-primary">Continue Shopping</a></div>
                <div class="pull-right"><a href="{{route('checkout.index')}}" class="btn btn-primary">Checkout</a></div>
            </div>
        </div>
        <!--Middle Part End -->

    </div>
</div>
<!-- //Main Container -->
@endsection


@section('extra-js')
<script src="{{ asset('js/app.js') }}"></script>
<script>
    (function () {

        const classname = document.querySelectorAll('.quantity-button')
        Array.from(classname).forEach(function (element) {
            element.addEventListener('click', function () {
                const id = element.getAttribute('data-id')
                const productQuantity = this.parentNode.previousSibling.previousSibling.value
                axios.patch(`/cart/${id}`, {
                    quantity: productQuantity,
                    productQuantity: productQuantity
                })
                .then(function (response) {
                    // console.log(response);
                    window.location.href = '{{ route('cart.index') }}'
                })
                .catch(function (error) {
                    //console.log(error);
                    window.location.href = '{{ route('cart.index') }}'
                });

            })
        })
    })()

</script>

@endsection
