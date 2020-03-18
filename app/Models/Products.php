<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table='products';

    protected $fillable=['cate_id','brand_id','shop_customer_id','name','detail','price','promotion_price','rate','amount','status'];
}
