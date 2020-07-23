
@extends('layout')
@section('content')


	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="/"><i class="fa fa-home"></i></a></li>
			<li>Refund</li>
		</ul>

		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-sm-9">
                <h2 class="title">Commande Refund</h2>


				<table class="table table-bordered">
					<thead>
						<tr>
							<td colspan="2" class="text-left">Les details de refund </td>
						</tr>
					</thead>
					<tbody>
						<tr>
                            <td style="width: 50%;" class="text-left">
                                <b>Votre refund a ete accepter</b>
                            </td>

                            <td style="width: 50%" class="text-center">
                                <img src="{{ asset('image/satim.png') }}" height="80" alt="" srcset="">
                               </td>
						</tr>
					</tbody>
				</table>



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
