<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['quantity'];
    public function category()
    {
        return $this->belongsToMany('App\Category');
    }

    public function presentPrice()
    {
        return sprintf('%d DA', $this->price);
    }

    public function scopeMightAlsoLike($query)
    {
        return $query->inRandomOrder()->take(8);
    }
}
