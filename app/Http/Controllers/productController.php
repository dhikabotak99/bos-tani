<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class productController extends Controller
{
    public function index(){
        $product =  product::all();

        return view('index', ['product' => $product]);
    }
}
