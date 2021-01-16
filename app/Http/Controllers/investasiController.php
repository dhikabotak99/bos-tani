<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\investasi;
use App\Models\order_investasi;
use Auth;
use DB;

class investasiController extends Controller
{
    public function index(){
        $investasi =  investasi::all();

        return view('investasi', ['investasi' => $investasi]);
    }
    
    public function allInvestasi(){
        $investasi =  investasi::all();

        return view('investasi', ['investasi' => $investas]);
    }

    public function detail($id){
        $investasi =  investasi::all();
        
        return view('index', ['investasi' => $investasi]);
    }

    public function investasi($id){
        $investasi =  investasi::find($id);

        return view('order-investasi', ['investasi' => $investasi]);
    }

    public function postInvestasi(Request $request){
        $investasi =  investasi::find($request->idInvestasi);
        $user = Auth::user();
        $order = new order_investasi;

        $order->buyer_id = $user->id;
        $order->product_id = $request->idInvestasi;
        $order->jumlah = $request->jumlah;
        $order->total_harga = $request->jumlah*$request->Harga;
        $order->status = "Menunggu Konfirmasi";
        $order->save();

        $investasi->Unit_Tersisa = $investasi->Unit_Tersisa-$order->jumlah;
        $investasi->save();

        return redirect('/history-investasi');
    }

    public function historyInvestasi(){
        $user = Auth::user();
        $orders = DB::table('order_investasi')
                    ->join('users', 'users.id', '=', 'order_investasi.buyer_id')
                    ->join('investasi', 'investasi.id', '=', 'order_investasi.product_id')
                    ->select('users.id', 'investasi.Nama', 'order_investasi.jumlah', 'order_investasi.total_harga', 'order_investasi.status')
                    ->where('order_investasi.buyer_id', '=', $user->id)
                    ->get();
        // $order =  order::All()->where('buyer_id', $user->id);
        // dd($orders);
        return view('history-investasi', compact('orders'));
    }

}
