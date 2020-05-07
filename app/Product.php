<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product_name', 'price', 'description', 'stock', 'weight', 'product_rate'];

    public function product_category(){
        return $this->belongsToMany(Product_Category::class, 'product_category_details')->withPivot(['id']);
    }

    public function product_image(){
        return $this->hasMany(Product_Image::class);
    }

    public function discount(){
        return $this->hasMany(Discount::class);
    }
}
