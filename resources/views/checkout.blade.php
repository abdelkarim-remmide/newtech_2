
@extends('layout')
@section('content')



	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="/"><i class="fa fa-home"></i></a></li>
			<li>Checkout</li>

		</ul>
        @if (session()->has('success_message'))
            <div class="spacer"></div>
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="spacer"></div>
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{!! $error !!}</li>
                    @endforeach
                </ul>
            </div>
        @endif
		<div class="row">
            <form action="{{route('checkout.store')}}" id="main-form" method="POST">
                @csrf
			<!--Middle Part Start-->
			<div id="content" class="col-sm-12">
			  <h2 class="title">Checkout</h2>
			  <div class="so-onepagecheckout row">
				<div class="col-left col-sm-3">

				  <div class="panel panel-default">
					<div class="panel-heading">
					  <h4 class="panel-title"><i class="fa fa-user"></i> Your Personal Details</h4>
					</div>
					  <div class="panel-body">
							<fieldset id="account">
							  <div class="form-group required">
								<label for="input-payment-firstname" class="control-label">First Name</label>
								<input type="text" class="form-control" id="input-payment-firstname" placeholder="First Name" value="{{old('nom')}}" name="nom" required>
							  </div>
							  <div class="form-group required">
								<label for="input-payment-lastname" class="control-label">Last Name</label>
								<input type="text" class="form-control" id="input-payment-lastname" placeholder="Last Name" value="{{old('prenom')}}" name="prenom" required>
							  </div>
							  <div class="form-group required">
                                <label for="input-payment-email" class="control-label">E-Mail</label>
                                @if (auth()->user())
                                <input type="email" class="form-control" id="input-payment-email" placeholder="E-Mail" value="{{auth()->user()->email}}" name="email" readonly>
                                @else
                                <input type="email" class="form-control" id="input-payment-email" placeholder="E-Mail" value="{{old('email')}}" name="email">
                                @endif

							  </div>
							  <div class="form-group required">
								<label for="input-payment-telephone" class="control-label">Telephone</label>
								<input type="text" class="form-control" id="input-payment-telephone" placeholder="Telephone" value="{{old('tel')}}" name="tel" required>
							  </div>
							</fieldset>
						  </div>
				  </div>
				  <div class="panel panel-default">
					<div class="panel-heading">
					  <h4 class="panel-title"><i class="fa fa-book"></i> Your Address</h4>
					</div>
					  <div class="panel-body">
							<fieldset id="address" class="required">
							  <div class="form-group required">
								<label for="input-payment-address-1" class="control-label">Address </label>
								<input type="text" class="form-control" id="input-payment-address-1" placeholder="Address 1" value="{{old('address')}}" name="address" required>
							  </div>
							  <div class="form-group required">
								<label for="input-payment-city" class="control-label">City</label>
								<input type="text" class="form-control" id="input-payment-city" placeholder="City" value="{{old('wilaya')}}" name="wilaya" required>
							  </div>
							  <div class="form-group required">
								<label for="input-payment-postcode" class="control-label">Post Code</label>
								<input type="text" class="form-control" id="input-payment-postcode" placeholder="Post Code" value="{{old('code_postal')}}" name="code_postal" required>
							  </div>
							  <div class="form-group required">
								<label for="input-payment-country" class="control-label">Country</label>
								<select class="form-control" id="input-payment-country" name="pay" required>

								  <option value="Algeria">Algeria</option>

								</select>
							  </div>
							</fieldset>
						  </div>
				  </div>
				</div>
				<div class="col-right col-sm-9">
				  <div class="row">
					<div class="col-sm-12">
					  <div class="panel panel-default">
						<div class="panel-heading">
						  <h4 class="panel-title"><i class="fa fa-shopping-cart"></i> Shopping cart</h4>
						</div>
						  <div class="panel-body">
							<div class="table-responsive">
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
                                    <td class="text-center"><a href="{{ route('category.show', $item->product->slug) }}"><img width="70px" src="{{ productImage($item->product->image) }}" alt="{{ $item->product->name }}" title="{{ $item->product->name }}" class="img-thumbnail" /></a></td>
                                    <td class="text-left"><a href="{{ route('category.show', $item->product->slug) }}">{{ $item->product->name }}</a><br />
                                     </td>
                                    <td class="text-left" width="200px"><div class="input-group btn-block quantity">
                                        <input type="text" name="quantity" value="{{ $item->qty }}" size="{{ $item->qty }}" class="form-control" />
                                        <span class="input-group-btn">
                                        <button type="submit" data-toggle="tooltip" title="Update" class="btn btn-primary"><i class="fa fa-clone"></i></button>
                                        <button type="submit" data-toggle="tooltip" title="Remove" class="btn btn-danger" onClick="delete()"><i class="fa fa-times-circle"></i></button>


                                        </span></div></td>
                                    <td class="text-right">{{ $item->product->presentPrice() }}</td>
                                    <td class="text-right">{{ presentPrice($item->total) }}</td>
                                  </tr>
                                  @endforeach
								</tbody>
								<tfoot>
								  <tr>
									<td class="text-right" colspan="4"><strong>Sub-Total:</strong></td>
									<td class="text-right">{{presentPrice(Cart::total())}}</td>
								  </tr>

								  <tr>
									<td class="text-right" colspan="4"><strong>Total:</strong></td>
									<td class="text-right">{{presentPrice(Cart::total())}}</td>
								  </tr>
								</tfoot>
							  </table>
							</div>
						  </div>
					  </div>
					</div>
					<div class="col-sm-12">
					  <div class="panel panel-default">
						<div class="panel-heading">
						  <h4 class="panel-title"><i class="fa fa-pencil"></i> Add Comments About Your Order</h4>
						</div>
						  <div class="panel-body">
							<label class="control-label" for="confirm_agree">
							  <input type="checkbox" value="1" required="" class="validate required" id="confirm_agree" name="confirm agree">
                              <span>J'accept les <a class="agree" href="#"><b>
                                Conditions d'utilisation</b></a></span> </label>
                                <br>
                              <label><div class="g-recaptcha" data-sitekey="6Ldd-rAZAAAAAJHQGrVG15lTxouQV5JJy2bFcBWZ"></div></label>
							<div class="buttons">
							  <div class="pull-right">
                                <button type="submit" class="btn btn-primary" id="make-payment" ><img src="/image/cib.png" height="25" width="25" >
                                    Valider</button>
							  </div>
							</div>
						  </div>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
            <!--Middle Part End -->
        </form>

		</div>
	</div>
    <!-- //Main Container -->
    <form action="{{ route('cart.destroy', $item->__raw_id) }}" class="inline" id="delete-form" method="post">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

    </form>
    @endsection
    @section('extra-js')

<script src='https://www.google.com/recaptcha/api.js'></script>
        <script>
            window.onload = function() {
                var form = document.querySelector("main-form");
                form.onsubmit = submitted.bind(form)
            }

            function submitted(event) {
                document.getElementById('make-payment').disabled=true

            }
            function delete() {
                document.getElementById('delete-form').submit()
            }
        </script>
    @endsection
