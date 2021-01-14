<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\order;

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
        $orders =  order::all();
        
        return view('/dashboard-admin/history', ['products' => $products], ['orders' => $orders]);
    }

    public function detailOrder(){
        $products =  product::all();
        
        return view('/dashboard-admin/detailorder', ['products' => $products]);
    }

    public function konfirm($id){
        $orders =  order::find($id);
        
        $orders->status = "Sudah diKonfirmasi";
        $orders->save();

        return view('/dashboard-admin/history');
    }

    public function delete($id){
        $orders =  order::find($id);

        $orders->delete();

        return view('/dashboard-admin/history');
    }
}
