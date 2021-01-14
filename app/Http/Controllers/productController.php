<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\investasi;

class productController extends Controller
{
    public function index(){
        $product =  product::all();
        $investasi =  investasi::all();
        

        return view('index', ['product' => $product], ['investasi' => $investasi]);
    }

    public function allProduct(){
        $product =  product::all();

        return view('product', ['product' => $product]);
    }

    public function detail($id){
        $product =  product::all();
        
        return view('index', ['product' => $product]);
    }
}
