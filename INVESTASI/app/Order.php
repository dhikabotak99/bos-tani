<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";
    protected $primaryKey = 'id';
    protected $fillable = ['product_id','amount','buyer_name','buyer_contact','created_at','updated_at'];
}
