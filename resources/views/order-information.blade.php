
@extends('layout')
@section('content')


	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="/"><i class="fa fa-home"></i></a></li>
			<li>Infromation de la commande</li>
		</ul>

		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-sm-9">
				<h2 class="title">Infromation de la commande</h2>

				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<td colspan="2" class="text-left">Les details de la commande</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td style="width: 50%;" class="text-left"> <b>Numero de commande:</b> {{$order->id}}
								<br>
                            <b>Date et l'heure de la transaction:</b> {{ $order->transation_date }}</td>
							<td style="width: 50%;" class="text-left"> <b>Mode de paiment:</b> {{$order->payment_gateway}}
							 </td>
						</tr>
					</tbody>
				</table>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<td style="width: 50%; vertical-align: top;" class="text-left">Adresse de livraison</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-left">{{$order->billing_nom}} {{$order->billing_prenom}}
								<br>{{$order->billing_address}}
								<br>{{$order->billing_wilaya}}
								<br>{{$order->billing_pay}}</td>
						</tr>
					</tbody>
				</table>
				<div class="table-responsive">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
                                <td class="text-center">Image</td>
                                <td class="text-left">Nom de produit</td>
                                <td class="text-left">Quantity</td>
                                <td class="text-right">Prix unitaire</td>
                                <td class="text-right">Total</td>
								<td style="width: 20px;"></td>
							</tr>
						</thead>
						<tbody>
                            @foreach ($products as $product)

							<tr>
								<td class="text-center"><a href="{{ route('category.show', $product->slug) }}"><img
                                    width="70px" src="{{ productImage($product->image) }}"
                                    alt="{{ $product->name }}" title="{{ $product->name }}"
                                    class="img-thumbnail" /></a></td>
								<td class="text-left">{{$product->name}} </td>
                                <td class="text-right">{{$product->pivot->quantity}}</td>
								<td class="text-right">{{$product->price}} DZD</td>
								<td class="text-right">{{$product->pivot->quantity * $product->price}} DZD</td>
                            <td style="white-space: nowrap;" class="text-right"> <a class="btn btn-primary" title="" data-toggle="tooltip" href="{{ route('category.show', $product->slug) }}" data-original-title="Reorder"><i class="fa fa-shopping-cart"></i></a>
									</a>
								</td>
							</tr>
                            @endforeach

						</tbody>
						<tfoot>
							<tr>
								<td colspan="3"></td>
								<td class="text-right"><b>Sous-Total</b>
								</td>
								<td class="text-right"><strong class="nt-price">{{$order->billing_subtotal}} DZD</strong></td>
								<td></td>
							</tr>
							<tr>
								<td colspan="3"></td>
								<td class="text-right"><b>Total</b>
								</td>
								<td class="text-right"><strong class="nt-price x2">{{$order->billing_total}} DZD</strong></td>
								<td></td>
							</tr>
						</tfoot>
					</table>
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
    <li><a href="{{ route('orders.index') }}" >Historique des commandes</a>
        </li>
	</ul>
</div>			</aside>
			<!--Right Part End -->
		</div>
	</div>
	<!-- //Main Container -->


    @endsection
