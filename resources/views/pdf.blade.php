<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
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
            <td style="width: 25%;" class="text-left"> <b>Mode de paiment:</b> {{$order->payment_gateway}}
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
</body>
</html>
