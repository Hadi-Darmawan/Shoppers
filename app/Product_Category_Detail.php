<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Category_Detail extends Model
{

    protected $table = 'product_category_details';

    protected $fillable = ['product_id', 'category_id'];
}
