<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class adminController extends Controller
{
    public function index(){
        $products =  product::all();
        
        return view('/dashboard-admin/home', ['products' => $products]);
    }

    public function products(){
        $products =  product::all();
        
        return view('/dashboard-admin/products', ['products' => $products]);
    }

    public function addProduct(){
        $products =  product::all();
        
        return view('/dashboard-admin/addproduct', ['products' => $products]);
    }

    public function updateProduct(){
        $products =  product::all();
        
        return view('/dashboard-admin/updateproduct', ['products' => $products]);
    }

    public function order(){
        $products =  product::all();
        
        return view('/dashboard-admin/order', ['products' => $products]);
    }

    public function history(){
        $products =  product::all();
        
        return view('/dashboard-admin/history', ['products' => $products]);
    }

    public function detailOrder(){
        $products =  product::all();
        
        return view('/dashboard-admin/detailorder', ['products' => $products]);
    }
}
