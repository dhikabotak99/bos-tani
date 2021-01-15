<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function order(){
        return $this->belongsTo('App\Models\order');
    }

    protected $table = 'products';
    use HasFactory;
}
