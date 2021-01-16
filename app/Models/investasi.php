<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class investasi extends Model
{

    public function orderInvestasi(){
        return $this->belongsTo('App\Models\order_investasi');
    }

    protected $table = 'investasi';
    use HasFactory;
}
