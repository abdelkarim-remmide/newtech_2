<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
        .text-center {
            text-align: center;
        }
        .text-left {
            text-align: left;
        }
        .text-right{
            float: right;
        }
        .table {
            width: 100%;
            max-width: 100%;
            margin-bottom: 20px;
        }
        .table-bordered {
            border: 1px solid #ddd;
        }
        table {
            border-spacing: 0;
            border-collapse: collapse;
        }
        table {
            background-color: transparent;
        }
        table.table-bordered thead > * {
            background-color: rgba(51, 51, 51, 0.1);
            font-weight: bold;
        }
        .table-responsive {
            min-height: .01%;
            overflow-x: auto;
        }
        .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
            padding: 8px;
            line-height: 1.42857143;
            vertical-align: top;
            border-top: 1px solid #ddd;
        }
        .table>caption+thead>tr:first-child>td, .table>caption+thead>tr:first-child>th, .table>colgroup+thead>tr:first-child>td, .table>colgroup+thead>tr:first-child>th, .table>thead:first-child>tr:first-child>td, .table>thead:first-child>tr:first-child>th {
            border-top: 0;
        }
        .table-bordered>thead>tr>td, .table-bordered>thead>tr>th {
            border-bottom-width: 2px;
        }
        .table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th {
            border: 1px solid #ddd;
        }
        .img-thumbnail {
            display: inline-block;
            max-width: 100%;
            height: auto;
            padding: 4px;
            line-height: 1.42857143;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
            -webkit-transition: all .2s ease-in-out;
            -o-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out;
        }
        img {
            max-width: 100%;
        }

        img {
            vertical-align: middle;
        }
        img {
            border: 0;
        }
        .title{
            color: #e62e04;
        }
        .d-inline{
            display: inline;
        }
        .p-10{
            padding-top: 20px;
        }
    </style>
  </head>
  <body>
<div>

    <img src="{{public_path('/image/catalog/logo2.png')}}" class="d-inline" alt="" srcset="">
    <img src="{{ public_path().'/image/cib.png' }}" class="d-inline text-right" style="width: 140px;height:80px" alt="" srcset="">
</div>


      <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-9 p-10">
            <h2 class="title text-center">Reçu de paiement</h2>
            <h2 class="title text-center">Votre paiement a été accepté</h2>

            <table class="table table-bordered table-hover p-10" width="100%" style="width:100%">
                <thead>
                    <tr>
                        <td colspan="2" class="text-left">Les details de la commande</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="width: 65%;" class="text-left"> <b>Numero de commande:</b> {{$order->id}}
                            <br>
                            <b>L'identifiant de la transaction:</b> {{ $order->transation_code }}
                            <br>
                            <b>Numero d'autorisation:</b> {{ $order->approvalCode }}
                            <br>
                        <b>Date et l'heure de la transaction:</b> {{ $order->transation_date }}</td>
                        <td style="width: 35%;" class="text-left"> <b>Mode de paiment:</b> {{$order->payment_gateway}}
                            <br>
                            <b>Response Code {{$order->respCode}}</b>
                         </td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-bordered table-hover p-10" width="100%" style="width:100%">
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
                <table class="table table-bordered table-hover p-10">
                    <thead>
                        <tr>
                            <td class="text-left">Nom de produit</td>
                            <td class="text-left">Quantity</td>
                            <td class="text-right">Prix unitaire</td>
                            <td class="text-right">Total</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)

                        <tr>
                            <td class="text-left">{{$product->name}} </td>
                            <td class="text-right">{{$product->pivot->quantity}}</td>
                            <td class="text-right">{{$product->price}} DA</td>
                            <td class="text-right">{{$product->pivot->quantity * $product->price}} DA</td>

                        </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td class="text-right"><b>Sous-Total</b>
                            </td>
                            <td class="text-right">{{$order->billing_subtotal}} DA</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td class="text-right"><b>Total</b>
                            </td>
                            <td class="text-right">{{$order->billing_total}} DA</td>
                        </tr>
                    </tfoot>
                </table>
            </div>



        </div>
        <h2>Merci de votre confiance</h2>
      </div>

</body>
</html>
