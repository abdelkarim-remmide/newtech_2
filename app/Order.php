<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=[
        'user_id','billing_email','billing_nom','billing_prenom','billing_address',
        'billing_tel','billing_pay','billing_wilaya','billing_code_postal','billing_subtotal',
        'billing_total','error','transation_date','transation_code'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product')->withPivot('quantity');
    }
}
