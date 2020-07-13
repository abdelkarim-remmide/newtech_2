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
                <b>Numero d'autorisation:</b> {{ $data['approvalCode'] }}
                <br>
            <b>Date et l'heure de la transaction:</b> {{ $order->transation_date }}</td>
            <td style="width: 25%;" class="text-left"> <b>Mode de paiment:</b> Cart CIB
                <br>
                <b>Response Code {{$data['params']['respCode']}}</b>
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
</body>
</html>
