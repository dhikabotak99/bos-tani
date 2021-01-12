<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class orderController extends Controller
{
    public function index(){
        $product =  Product::all();

        return view('order', ['product' => $product]);
    }
    
    public function order($id){
        $product =  Product::find($id);

        return view('order-product', ['product' => $product]);
    }
}
