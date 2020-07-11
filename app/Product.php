<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
        return $this->belongsToMany('App\Category');
    }

    public function presentPrice()
    {
        return sprintf('%01.2f DZD', $this->price/100);
    }

    public function scopeMightAlsoLike($query)
    {
        return $query->inRandomOrder()->take(8);
    }
}
