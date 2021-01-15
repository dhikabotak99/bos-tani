<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\order;
use Auth;
use DB;

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
    public function postAddProduct(Request $request){
        $products = new product;
        $products->Nama = $request->name;
        $products->Harga = $request->price;
        $products->Asal = $request->asal;
        $products->Deskripsi = $request->description;
        $products->Stock = $request->stock;
        if($request->hasFile('image')){
            $resorce       = $request->file('image');
            $name   = $resorce->getClientOriginalName();
            $resorce->move(\base_path() ."/public/images", $name);
            $products->img_path = $name;
            echo "Gambar berhasil di upload";
        }else{
            echo "Gagal upload gambar";
        }
        $products->save();

        return redirect('products');
    }  
    

    public function updateProduct($id){
        $products =  product::find($id);
        
        return view('/dashboard-admin/updateproduct', ['products' => $products]);
    }
    
    public function postUpdateProduct($id, Request $request){
        $products =  product::find($id);
        $products->Nama = $request->Nama;
        $products->Harga = $request->Harga;
        $products->Asal = $request->Asal;
        $products->Deskripsi = $request->Deskripsi;
        $products->Stock = $request->Stock;
        if($request->hasFile('image')){
            $resorce       = $request->file('image');
            $name   = $resorce->getClientOriginalName();
            $resorce->move(\base_path() ."/public/images", $name);
            $products->img_path = $name;
            echo "Gambar berhasil di upload";
        }else{
            echo "Gagal upload gambar";
        }
        $products->save();

        $products =  product::all();
        return redirect('products');
    }

    public function deleteProduct($id){
        $products = product::find($id);

        $products->delete();

        return redirect('products');
    }
    
    public function order(){
        $products =  product::all();
        
        return view('/dashboard-admin/order-products', ['products' => $products]);
    }

    public function history(){
        $products =  product::all();
        $orders = DB::table('order')
                    ->join('users', 'users.id', '=', 'order.buyer_id')
                    ->join('products', 'products.id', '=', 'order.product_id')
                    ->select('order.id', 'users.name', 'products.Nama', 'order.jumlah', 'order.total_harga', 'order.status')
                    ->get();

        return view('/dashboard-admin/history-products', ['orders' => $orders]);
    }

    public function detailOrder(){
        $products =  product::all();
        
        return view('/dashboard-admin/detailorder', ['products' => $products]);
    }

    public function konfirmOrder($id){
        $orders = DB::table('order')
                    ->select('order.id', 'order.status')
                    ->where('order.id', '=', $id)
                    ->update(['order.status' => "Sudah di Konfirmasi"]);
        
        return redirect('history');
    }

    public function deleteOrder($id){
        $orders = order::find($id);

        $orders->delete();

        return redirect('history');
    }
}
