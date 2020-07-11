@extends('layout')



@section('content')
    <!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="/"><i class="fa fa-home"></i></a></li>
			<li>Login</li>
		</ul>

		<div class="row">
			<div id="content" class="col-sm-12">
				<div class="page-login">

					<div class="account-border">
						<div class="row">
                            <div class="col-sm-6 new-customer">
								<div class="well">
									<h2><i class="fa fa-file-o" aria-hidden="true"></i> Guest Checkout</h2>
									<p>Continue as guest</p>
								</div>
								<div class="bottom-form">
                                <a href="{{ route('guestcheckout.index') }}" class="btn btn-default pull-right">Continue</a>
								</div>
							</div>

							<form method="POST" action="{{ route('login') }}">
                                @csrf
								<div class="col-sm-6 customer-login">
									<div class="well">
										<h2><i class="fa fa-file-text-o" aria-hidden="true"></i> Returning Customer</h2>
										<p><strong>I am a returning customer</strong></p>
										<div class="form-group">
											<label class="control-label " for="input-email">E-Mail Address</label>
                                            <input type="email" id="input-email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
										</div>
										<div class="form-group">
											<label class="control-label " for="input-password">Password</label>
											<input type="password" name="password" value="" id="input-password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                        </div>
                                        <div class="form-group">
                                            <p>Create account
                                                <a href="{{ route('register') }}" class="">register</a></p>
                                        </div>
									</div>
									<div class="bottom-form">
										@if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
										<input type="submit" value="Login" class="btn btn-default pull-right" />
									</div>
								</div>
							</form>
                        </div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- //Main Container -->
@endsection
