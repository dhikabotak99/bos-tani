<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Support\Facades\DB;

use App\Product;

use App\Order;

class OrderController extends Controller
{
    public function index()
    {
        $history_data = \DB::table('orders')
        ->select('products.name','orders.buyer_name','orders.buyer_contact','orders.amount',)
        ->join('products','products.id','orders.product_id')
        ->get();
        return view('history', compact('history_data'));
    }
    public function list()
    {
        $product=Product::all();
        return view('order', compact('product'));
    }
    public function form($id)
    {
        $product=Product::find($id);
        return view('detailorder',compact('product'));
    }
    public function store(Request $request)
    {
         Order::create([
             'product_id'=>$request->product_id,
             'buyer_name'=>$request->buyer_name,
             'buyer_contact'=>$request->buyer_contact,
             'amount'=>$request->amount
         ]);
         return redirect('history');

    }
}
