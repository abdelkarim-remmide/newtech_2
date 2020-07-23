@extends('layout')

@section('content')

<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i></a></li>
        <li>Compte</li>
        <li>S'inscrire</li>
    </ul>

    <div class="row">
        <div id="content" class="col-sm-12">
            <h2 class="title">Créer un compte</h2>
            <p>Si vous avez déjà un compte chez nous, veuillez vous connecter au <a href="#">page de connexion</a>.</p>
        <form action="{{ route('register') }}" method="post" enctype="multipart/form-data" class="form-horizontal account-register clearfix">
            @csrf
                <fieldset id="account">
                    <legend>Vos informations personnelles</legend>
                    <div class="form-group required" style="display: none;">
                        <label class="col-sm-2 control-label">Customer Group</label>
                        <div class="col-sm-10">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="customer_group_id" value="1" checked="checked"> Default
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-firstname">Nom</label>
                        <div class="col-sm-10">
                            <input type="text" name="nom" value="" placeholder="Nom" id="input-firstname" class="form-control @error('nom') is-invalid @enderror">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-lastname">Prenom</label>
                        <div class="col-sm-10">
                            <input type="text" name="prenom" value="" placeholder="Prenom" id="input-lastname" class="form-control @error('prenom') is-invalid @enderror">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-email">Adresse e-mail</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" value="" placeholder="Adresse e-mail" id="input-email" class="form-control @error('email') is-invalid @enderror">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-telephone">Numéro de téléphone</label>
                        <div class="col-sm-10">
                            <input type="tel" name="tel" value="" placeholder="Numéro de téléphone" id="input-telephone" class="form-control @error('tel') is-invalid @enderror">
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Votre mot de passe</legend>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-password">Mot de passe</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" value="" placeholder="Mot de passe" id="input-password" class="form-control @error('password') is-invalid @enderror">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-confirm">Confirmer le mot de passe</label>
                        <div class="col-sm-10">
                            <input type="password" name="password_confirmation" value="" placeholder="Confirmer le mot de passe" id="input-confirm" class="form-control">
                        </div>
                    </div>
                </fieldset>
                <div class="buttons">
                    <div class="pull-right">I have read and agree to the <a href="#" class="agree"><b>Pricing Tables</b></a>
                        <input class="box-checkbox" type="checkbox" name="agree" value="1"> &nbsp;
                        <input type="submit" value="Continue" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
