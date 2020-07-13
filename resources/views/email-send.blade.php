
@extends('layout')
@section('content')


	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="/"><i class="fa fa-home"></i></a></li>
		</ul>

		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-sm-9">
                <h2 class="title">Infromation de la commande</h2>


				<table class="table table-bordered">
					<tbody>
						<tr>
                            <td style="width: 100%;" class="text-left">
                                <b>L'email a été envoyer avec succes verify votre boit</b>
                            </td>
						</tr>
					</tbody>
				</table>



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
