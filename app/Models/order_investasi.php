<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_investasi extends Model
{
    public function investasi(){
        return $this->hasOne('App\Models\Investasi', 'foreign-key');
    }

    public function user(){
        return $this->hasOne('App\Models\User', 'foreign-key');
    }

    protected $table = 'order_investasi';
    use HasFactory;
}
