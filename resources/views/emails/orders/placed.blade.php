
@component('mail::message')
# Ordre reçu

Nous vous remercions de votre commande.

**Numéro de commande:** {{ $order->id }}

**L'identifiant de la transaction:** {{ $order->transation_code }}

**Date et l'heure de la transaction:** {{ $order->transation_date }}

**Mode de paiment:** {{$order->payment_gateway}}

**Numero d'autorisation:** {{ $order->approvalCode }}

**Nom de commandant:** {{$order->billing_nom}} {{$order->billing_prenom}}

**Address de livraison:** {{$order->billing_address}}

**Wilaya de livraison:** {{$order->billing_wilaya}} , {{$order->billing_pay}}

**Total:** {{ $order->billing_total }} DA

**Les articles commandés**

@foreach ($order->products as $product)
Nom: {{ $product->name }} <br>
Prix: {{ $product->price }} DA <br>
Quantité: {{ $product->pivot->quantity }} <br>
@endforeach

Vous pouvez obtenir plus de détails sur votre commande en vous connectant à notre site Web.

@component('mail::button', ['url' => config('app.url'), 'color' => 'green'])
Aller sur notre site Internet
@endcomponent

Merci encore de nous avoir choisis.

Cordialement,<br>
NewTechMek
@endcomponent
