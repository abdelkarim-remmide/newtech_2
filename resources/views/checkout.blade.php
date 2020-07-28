
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
            <form action="{{route('checkout.store')}}" name="theform" id="main-form" method="POST">
                @csrf
			<!--Middle Part Start-->
			<div id="content" class="col-sm-12">
			  <h2 class="title">Checkout</h2>
			  <div class="so-onepagecheckout row">
				<div class="col-left col-sm-3">

				  <div class="panel panel-default">
					<div class="panel-heading">
					  <h4 class="panel-title"><i class="fa fa-user"></i> Vos Information personnelle</h4>
					</div>
					  <div class="panel-body">
							<fieldset id="account">
							  <div class="form-group required">
                                <label for="input-payment-firstname" class="control-label">Nom :</label>
                                @if (auth()->user())
                                <input type="text" class="form-control" id="input-payment-firstname" placeholder="Nom" value="{{auth()->user()->nom}}" name="nom" readonly>
                                @else
                                <input type="text" class="form-control" id="input-payment-firstname" placeholder="Nom" value="{{old('nom')}}" name="nom" required>
                                @endif

							  </div>
							  <div class="form-group required">
                                <label for="input-payment-lastname" class="control-label">Prénom :</label>
                                @if (auth()->user())
                                <input type="text" class="form-control" id="input-payment-lastname" placeholder="Prénom" value="{{auth()->user()->prenom}}" name="prenom" readonly>
                                @else
								<input type="text" class="form-control" id="input-payment-lastname" placeholder="Prénom" value="{{old('prenom')}}" name="prenom" required>
                                @endif

							  </div>
							  <div class="form-group required">
                                <label for="input-payment-email" class="control-label">Adresse e-mail :</label>
                                @if (auth()->user())
                                <input type="email" class="form-control" id="input-payment-email" placeholder="Adresse e-mail" value="{{auth()->user()->email}}" name="email" readonly>
                                @else
                                <input type="email" class="form-control" id="input-payment-email" placeholder="Adresse e-mail" value="{{old('email')}}" name="email" required>
                                @endif

							  </div>
							  <div class="form-group required">
                                <label for="input-payment-telephone" class="control-label">Numéro de téléphone :</label>
                                @if (auth()->user())
                                <input type="text" class="form-control" id="input-payment-telephone" placeholder="Numéro de téléphone" value="{{auth()->user()->tel}}" name="tel" readonly>
                                @else
								<input type="text" class="form-control" id="input-payment-telephone" placeholder="Numéro de téléphone" value="{{old('tel')}}" name="tel" required>
                                @endif
							  </div>
							</fieldset>
						  </div>
				  </div>
				  <div class="panel panel-default">
					<div class="panel-heading">
					  <h4 class="panel-title"><i class="fa fa-book"></i> Votre Addresse</h4>
					</div>
					  <div class="panel-body">
							<fieldset id="address" class="required">
							  <div class="form-group required">
								<label for="input-payment-address-1" class="control-label">Addresse </label>
								<input type="text" class="form-control" id="input-payment-address-1" placeholder="Addresse" value="{{old('address')}}" name="address" required>
							  </div>
							  <div class="form-group required">
								<label for="input-payment-city" class="control-label">Wilaya/ville :</label>
								<input type="text" class="form-control" id="input-payment-city" placeholder="Wilaya/ville" value="{{old('wilaya')}}" name="wilaya" required>
							  </div>
							  <div class="form-group required">
								<label for="input-payment-postcode" class="control-label">Code Postal</label>
								<input type="text" class="form-control" id="input-payment-postcode" placeholder="Code Postal" value="{{old('code_postal')}}" name="code_postal" required>
							  </div>
							  <div class="form-group required">
								<label for="input-payment-country" class="control-label">Pays :</label>
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
						  <h4 class="panel-title"><i class="fa fa-shopping-cart"></i> VOTRE COMMANDE</h4>
						</div>
						  <div class="panel-body">
							<div class="table-responsive">
							  <table class="table table-bordered">
								<thead>
								  <tr>
									<td class="text-center">Image</td>
									<td class="text-left">Nom de produit</td>
									<td class="text-left">Quantity</td>
									<td class="text-right">Prix unitaire</td>
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
                                        <input type="text" name="quantity" value="{{ $item->qty }}" size="{{ $item->qty }}"
                                            class="form-control" />
                                        <span class="input-group-btn">
                                            <button type="submit" data-toggle="tooltip" title="Update"
                                        class="btn btn-primary quantity-button" data-id="{{$item->__raw_id}}" data-productQuantity="{{ $item->product->quanity }}"><i
                                                    class="fa fa-clone"></i></button>
                                        <button type="submit" data-toggle="tooltip" title="Remove" class="btn btn-danger" onClick="document.getElementById('delete-form').submit()"><i class="fa fa-times-circle"></i></button>


                                        </span></div></td>
                                    <td class="text-right">{{ $item->product->presentPrice() }}</td>
                                    <td class="text-right">{{ presentPrice($item->total) }}</td>
                                  </tr>
                                  @endforeach
								</tbody>
								<tfoot>
								  <tr>
									<td class="text-right" colspan="4"><strong>Sous-Total:</strong></td>
									<td class="text-right"><strong class="nt-price">{{presentPrice(Cart::total())}}</strong></td>
								  </tr>

								  <tr>
									<td class="text-right" colspan="4"><strong>Total:</strong></td>
									<td class="text-right h4 text-success"><strong class="nt-price x2">{{presentPrice(Cart::total())}}</strong></td>
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
						  <h4 class="panel-title"><i class="fa fa-pencil"></i> Valid votre commande</h4>
						</div>
						  <div class="panel-body">
                            <p>Veuillez sélectionner le mode de paiement préféré à utiliser pour cette commande.</p>
                            <div>

                            <div class="radio custom">
                                <label>
                                  <input type="radio" checked="checked" name="payment" value="Cash on delivery"> <img src="{{asset('/image/cod.png')}}" height="40" width="40" > Paiement à la livraison</label>
                              </div>

                              <div class="radio custom" style="padding-left: 10px">
                                <label>
                                  <input type="radio" name="payment" value="Cart CIB"> <img src="{{asset('/image/cib.png')}}" height="40" width="40" > Cart CIB</label>
                              </div>
                            </div>
							<label class="control-label custom" for="confirm_agree">
							  <input type="checkbox"  required="" class="validate required" id="confirm_agree" name="confirm agree">
                            <span>J'accept les <a class="agree" target="_blank" href="{{ asset('terms/ANNEXE-1.pdf') }}"><b>
                                Conditions d'utilisation</b></a></span> </label>
                                <br>
                              <label><div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                                <div class="col-md-12 pull-center">
                                    {!! app('captcha')->display(['data-callback' => 'onReCaptchaSuccess']) !!}
                                    @if ($errors->has('g-recaptcha-response'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div></label>
							<div class="buttons">
							  <div class="pull-right">
                                <button type="submit" class="btn btn-primary" id="make-payment" ><img src="{{asset('/image/cib.png')}}" class="hide" height="25" width="25" >
                                    Acheter</button>
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
    <script src="{{ asset('js/app.js') }}"></script>
    {!! NoCaptcha::renderJs() !!}
        <script>

            var recaptchaStatus=0
            window.onload = function() {
                var form = document.querySelector("#main-form");

                form.onsubmit = submitted.bind(form)
                var $recaptcha = document.querySelector('#g-recaptcha-response');

                if($recaptcha) {
                    $recaptcha.setAttribute("required", "required");
                }
            }
            $('input[name="payment"]').change(function (e){
                $('#make-payment img').toggleClass("hide")
            })
            function onReCaptchaSuccess() {
                recaptchaStatus=1
                checkform()
            }
            function submitted(event) {
                document.getElementById('make-payment').disabled=true
            }
            document.getElementById("input-payment-firstname").addEventListener("keyup", checkform)
            document.getElementById("input-payment-lastname").addEventListener("keyup", checkform)
            document.getElementById("input-payment-email").addEventListener("keyup", checkform)
            document.getElementById("input-payment-telephone").addEventListener("keyup", checkform)
            document.getElementById("input-payment-address-1").addEventListener("keyup", checkform)
            document.getElementById("input-payment-city").addEventListener("keyup", checkform)
            document.getElementById("input-payment-postcode").addEventListener("keyup", checkform)
            document.getElementById("confirm_agree").addEventListener("change", checkform)

            document.getElementById('make-payment').disabled=true

            function checkform()
            {
                firstName=document.getElementById("input-payment-firstname").value
                lastName=document.getElementById("input-payment-lastname").value
                email=document.getElementById("input-payment-email").value
                tel=document.getElementById("input-payment-telephone").value
                address=document.getElementById("input-payment-address-1").value
                city=document.getElementById("input-payment-city").value
                postCode=document.getElementById("input-payment-postcode").value
                confirmAgree=document.getElementById("confirm_agree").checked

                if(firstName && lastName && email && tel && address && city && postCode && confirmAgree && recaptchaStatus){
                    document.getElementById('make-payment').disabled =false
                }
                else document.getElementById('make-payment').disabled = true
            }
            (function () {

    const classname = document.querySelectorAll('.quantity-button')
    Array.from(classname).forEach(function (element) {
        element.addEventListener('click', function () {
            const id = element.getAttribute('data-id')
            const productQuantity = element.getAttribute('data-productQuantity')
            const quantity = this.parentNode.previousSibling.previousSibling.value
            axios.patch(`/cart/${id}`, {
                quantity: quantity,
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
