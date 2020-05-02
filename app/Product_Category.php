<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Category extends Model
{

    protected $table = 'product_categories';

    protected $fillable = [
        'category_name'
    ];
}
