<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Product extends Model
{
    use SearchableTrait;
    protected $fillable = ['quantity'];
    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'products.name' => 10,
            'products.details' => 5,
            'products.description' => 2,
        ],
    ];
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

    public function scopeMightAlsoLike4($query)
    {
        return $query->inRandomOrder()->take(4);
    }
    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        $array = $this->toArray();

        $extraFields = [
            'categories' => $this->categories->pluck('name')->toArray(),
        ];

        return array_merge($array, $extraFields);
    }
}
