
@extends('layout')
@section('content')


	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="/"><i class="fa fa-home"></i></a></li>
			<li>Order Infomation</li>
		</ul>

		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-sm-9">
				<h2 class="title">Order Information</h2>

				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<td colspan="2" class="text-left">Order Details</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td style="width: 50%;" class="text-left"> <b>Order ID:</b> {{$order->id}}
								<br>
                            <b>Date Added:</b> {{ $order->transation_date }}</td>
							<td style="width: 50%;" class="text-left"> <b>Payment Method:</b> Satim
							 </td>
						</tr>
					</tbody>
				</table>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<td style="width: 50%; vertical-align: top;" class="text-left">Shipping Address</td>
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
								<td class="text-left">Product Image</td>
								<td class="text-left">Product Name</td>
								<td class="text-right">Quantity</td>
								<td class="text-right">Price</td>
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
								<td class="text-right"><b>Sub-Total</b>
								</td>
								<td class="text-right">{{$order->billing_subtotal}} DZD</td>
								<td></td>
							</tr>
							<tr>
								<td colspan="3"></td>
								<td class="text-right"><b>Total</b>
								</td>
								<td class="text-right">{{$order->billing_total}} DZD</td>
								<td></td>
							</tr>
						</tfoot>
					</table>
				</div>
				<div class="buttons clearfix">
					<div class="pull-right"><a class="btn btn-primary" href="#">Continue</a>
					</div>
				</div>



			</div>
			<!--Middle Part End-->
			<!--Right Part Start -->
			<aside class="col-sm-3 hidden-xs" id="column-right">
				<h2 class="subtitle">Account</h2>
<div class="list-group">
	<ul class="list-item">
		<li><a href="{{ route('users.edit') }}">My Account</a>
        </li>
    <li><a href="{{ route('orders.index') }}" >Order History</a>
        </li>
	</ul>
</div>			</aside>
			<!--Right Part End -->
		</div>
	</div>
	<!-- //Main Container -->


    @endsection
