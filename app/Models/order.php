<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    public function product(){
        return $this->hasOne('App\Models\Product', 'foreign-key');
    }

    public function user(){
        return $this->hasOne('App\Models\User', 'foreign-key');
    }

    protected $table = 'order';
    use HasFactory;
}
