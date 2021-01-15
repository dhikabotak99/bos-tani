<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use DB;

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
    
    public function postOrder(Request $request){
        $product =  Product::find($request->idProduct);
        $user = Auth::user();
        $order = new Order;

        $order->buyer_id = $user->id;
        $order->product_id = $request->idProduct;
        $order->jumlah = $request->jumlah;
        $order->total_harga = $request->jumlah*$request->Harga;
        $order->status = "Menunggu Konfirmasi";
        $order->save();

        $product->Stock = $product->Stock-$order->jumlah;
        $product->save();

        return redirect('/');
    }

    public function historyPembeli(){
        $user = Auth::user();
        $orders = DB::table('order')
                    ->join('users', 'users.id', '=', 'order.buyer_id')
                    ->join('products', 'products.id', '=', 'order.product_id')
                    ->select('users.id', 'products.Nama', 'order.jumlah', 'order.total_harga', 'order.status')
                    ->where('order.buyer_id', '=', $user->id)
                    ->get();
        // $order =  order::All()->where('buyer_id', $user->id);
        // dd($orders);
        return view('history-pembeli', compact('orders'));
    }
}
