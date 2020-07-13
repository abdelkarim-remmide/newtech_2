
@extends('layout')

@section('content')



	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="/"><i class="fa fa-home"></i></a></li>
			<li>Order History</li>
		</ul>

		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-sm-9">
				<h2 class="title">Order History</h2>
				<div class="table-responsive">
                    @if (count($orders))

					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<td class="text-center">Order ID</td>
								<td class="text-center">Status</td>
								<td class="text-center">Date Added</td>
								<td class="text-right">Total</td>
								<td></td>
							</tr>
						</thead>
						<tbody>
                            @foreach ($orders as $order)
                            <tr>
                            <td class="text-center">{{ $order->id }}</td>
								<td class="text-center">@if ($order->shipped)
                                    Completed
                                @else
                                    shipped
                                @endif </td>
								<td class="text-center">{{ $order->transation_date }}</td>
								<td class="text-right">{{ $order->billing_total }} DZD</td>
								<td class="text-center"><a class="btn btn-info" title="" data-toggle="tooltip" href="{{route('orders.show',$order->id)}}" data-original-title="View"><i class="fa fa-eye"></i></a>
								</td>
							</tr>
                            @endforeach

						</tbody>
					</table>
                    @else
                        <div class="text-center"><p>You have done no order</p></div>
                    @endif
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
    <li class="active"><a href="#" >Order History</a>
        </li>
	</ul>
</div>			</aside>
			<!--Right Part End -->
		</div>
	</div>
	<!-- //Main Container -->

    @endsection
