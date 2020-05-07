<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Category extends Model
{

    protected $table = 'product_categories';

    protected $fillable = [
        'category_name'
    ];

    public function product(){
        return $this->belongsToMany(Product::class, 'product_category_details')->withPivot(['id']);
    }
}
