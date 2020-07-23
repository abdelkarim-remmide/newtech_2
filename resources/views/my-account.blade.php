@extends('layout')
@section('content')
	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="/"><i class="fa fa-home"></i></a></li>
			<li>Mon compte</li>
		</ul>

		<div class="row">
			<!--Middle Part Start-->
			<div class="col-sm-9" id="content">
				<h2 class="title">Mon compte</h2>
				<p class="lead">Bonjour, <strong>{{auth()->user()->nom.' '.auth()->user()->prenom }}!</strong> - Pour mettre à jour les informations de votre compte.</p>
                <form method="POST" action="{{ route('users.update') }}">
                    @csrf
                    @method('patch')
					<div class="row">
						<div class="col-sm-6">
							<fieldset id="personal-details">
								<legend>Détails personnels</legend>
								<div class="form-group required">
									<label for="input-payment-firstname" class="control-label">Nom :</label>
                                    <input type="text" class="form-control @error('nom') is-invalid @enderror" id="input-payment-firstname" placeholder="Nom" value="{{auth()->user()->nom}}" name="nom" required>
                                    @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
								</div>
								<div class="form-group required">
									<label for="input-payment-lastname" class="control-label">Prénom :</label>
                                    <input type="text" class="form-control @error('prenom') is-invalid @enderror" id="input-payment-lastname" placeholder="Prénom" value="{{auth()->user()->prenom}}" name="prenom" required>
                                    @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
								</div>
								<div class="form-group required">
									<label for="input-payment-email" class="control-label">Adresse e-mail :</label>
									<input type="email" class="form-control" id="input-payment-email" placeholder="Adresse e-mail" value="{{auth()->user()->email}}" name="email" readonly>
								</div>
								<div class="form-group required">
									<label for="input-payment-telephone" class="control-label">Numéro de téléphone :</label>
                                    <input type="text" class="form-control @error('tel') is-invalid @enderror" id="input-payment-telephone" placeholder="Numéro de téléphone" value="{{auth()->user()->tel}}" name="tel" required>
                                    @error('tel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
								</div>
							</fieldset>
							<br>
						</div>
						<div class="col-sm-6">
							<fieldset>
								<legend>Changer le mot de passe</legend>
								<div class="form-group required">
									<label for="input-password" class="control-label">Ancien mot de passe</label>
                                    <input type="password" class="form-control @error('old-password') is-invalid @enderror"  placeholder="Ancien mot de passe" value="" name="old_password">

                                @error('old-password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
								</div>
								<div class="form-group required">
									<label for="input-password" class="control-label">Nouveau mot de passe</label>
                                    <input type="password" class="form-control @error('new-password') is-invalid @enderror"  placeholder="Nouveau mot de passe" value="" name="new_password">

                                @error('new-password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
								</div>
								<div class="form-group required">
									<label for="input-confirm" class="control-label">Nouveau mot de passe Confirmer</label>
									<input type="password" class="form-control" id="input-confirm" placeholder="Nouveau mot de passe Confirmer" value="" name="new_confirm">
								</div>
							</fieldset>
						</div>
					</div>



					<div class="buttons clearfix">
						<div class="pull-right">
							<input type="submit" class="btn btn-md btn-primary" value="Sauvegarder les modifications">
						</div>
					</div>
				</form>
			</div>
			<!--Middle Part End-->
			<!--Right Part Start -->
			<aside class="col-sm-3 hidden-xs" id="column-right">
				<h2 class="subtitle">Compte</h2>
				<div class="list-group">
					<ul class="list-item">
						<li><a href="#" class="active">Mon compte</a>
						</li>
                    <li><a href="{{ route('orders.index') }}">Historique des commandes</a>
						</li>
					</ul>
				</div>
			</aside>
			<!--Right Part End -->
		</div>
	</div>
	<!-- //Main Container -->
@endsection
