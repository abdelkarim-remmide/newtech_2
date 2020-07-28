
@extends('layout')

@section('content')



	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="/"><i class="fa fa-home"></i></a></li>
			<li>Historique des commandes</li>
		</ul>

		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-sm-9">
				<h2 class="title">Historique des commandes</h2>
				<div class="table-responsive">
                    @if (count($orders))

					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<td class="text-center">Numéro de commande</td>
								<td class="text-center">Statut</td>
								<td class="text-center">Date ajoutée</td>
								<td class="text-right">Total</td>
								<td></td>
							</tr>
						</thead>
						<tbody>
                            @foreach ($orders as $order)
                            <tr>
                            <td class="text-center">{{ $order->id }}</td>
								<td class="text-center">@if (!$order->shipped)
                                    Non envoyé
                                @else
                                Envoyé
                                @endif </td>
								<td class="text-center">{{ $order->transation_date }}</td>
								<td class="text-right">{{ $order->billing_total }} DZD</td>
                                <td class="text-center"><a class="btn btn-info" title="" data-toggle="tooltip" href="{{route('ordersstatus.show',$order->id)}}" data-original-title="View"><i class="fa fa-eye"></i></a>
                                    @if (!$order->shipped)<a class="btn btn-danger" title="" data-toggle="tooltip" href="{{route('guestcheckout.refund',$order->id)}}" data-original-title="Return"><i class="fa fa-reply"></i></a>@endif
								</td>
							</tr>
                            @endforeach

						</tbody>
					</table>
                    @else
                        <div class="text-center"><p>Vous n'avez effectué aucune commande</p></div>
                    @endif
				</div>

			</div>
			<!--Middle Part End-->
			<!--Right Part Start -->
			<aside class="col-sm-3 hidden-xs" id="column-right">
				<h2 class="subtitle">Compte</h2>
<div class="list-group">
	<ul class="list-item">
		<li><a href="{{ route('users.edit') }}">Mon compte</a>
        </li>
    <li class="active"><a href="#" >Historique des commandes</a>
        </li>
	</ul>
</div>			</aside>
			<!--Right Part End -->
		</div>
	</div>
	<!-- //Main Container -->

    @endsection
