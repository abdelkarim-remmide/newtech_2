
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


				<table class="table table-bordered">
					<thead>
						<tr>
							<td colspan="2" class="text-left">Les details de la commande </td>
						</tr>
					</thead>
					<tbody>
						<tr>
                            <td style="width: 50%;" class="text-left">
                                {{$data}}
                                <b>@if (!empty($data['params']['respCode_desc']))
                                    {{ $data['params']['respCode_desc'] }}
                                @else
                                    {{ $data['actionCodeDescription'] }}
                                @endif</b>
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
