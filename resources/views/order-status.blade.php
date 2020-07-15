
@extends('layout')
@section('content')


	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb no-print">
			<li><a href="/"><i class="fa fa-home"></i></a></li>
			<li>Infromation de la commande</li>
        </ul>
        <img src="/image/catalog/logo.png" class="print" alt="" srcset="">

		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-sm-9">
				<h2 class="title">Infromation de la commande</h2>
                <div class="text-center no-print">
                    <ul style="display:flex">
                        <li style="padding-right: 10px"><a href="#" id="cmd">Télécharger</a></li>
                        <li style="padding-right: 10px"><a href="javascript:window.print()">Imprimer</a></li>
                    <li><a href="{{ route('sendmail') }}">Envoyer par mail</a></li>
                    </ul>
                </div>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<td colspan="3" class="text-left">Les details de la commande</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td style="width: 50%;" class="text-left"> <b>Numero de commande:</b> {{$order->id}}
                                <br>
                                <b>L'identifiant de la transaction:</b> {{ $order->transation_code }}
                                <br>
                                <b>Numero d'autorisation:</b> {{ $order->approvalCode }}
                                <br>
                            <b>Date et l'heure de la transaction:</b> {{ $order->transation_date }}</td>
                            <td style="width: 25%;" class="text-left"> <b>Mode de paiment:</b> Cart CIB
                                <br>
                                <b>Response Code {{$order->respCode}}</b>
                             </td>
                             <td style="width: 25%" class="text-center">
                             <img src="{{ asset('image/satim.png') }}" height="80" alt="" srcset="">
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



            </div>
            <div id="editor"></div>
			<!--Middle Part End-->
			<!--Right Part Start -->
			<aside class="col-sm-3 hidden-xs no-print" id="column-right">
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

    @section('extra-js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
    <script>
        var doc = new jsPDF();
        var specialElementHandlers = {
            '#editor': function (element, renderer) {
                return true;
            }
        };

        $('#cmd').click(function () {
            doc.fromHTML($('#content').html(), 15, 15, {
                'width': 170,
                    'elementHandlers': specialElementHandlers
            });
            doc.save('sample-file.pdf');
        });

        // This code is collected but useful, click below to jsfiddle link.
    </script>
    @endsection
