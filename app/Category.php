<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];
    protected $table = 'category';
    public function products()
    {
        return $this->belongsToMany('App\Product');
    }

    // this relationship will only return one level of child items
    public function category()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    // This is method where we implement recursive relationship
    public function childCategory()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }


}
