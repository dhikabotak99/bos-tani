<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $product=Product::all();
        return view('home', compact('product'));
    }
    public function list()
    {
        $product=Product::all();
        return view('products', compact('product'));
    }
    public function addProduct()
    {
        return view('addproduct');
    }
    public function store(Request $request)
    {

        $image = time().'.'.$request->img_path->extension();

        $request->img_path->move(public_path('img'), $image);
   
         Product::create([
             'name'=>$request->name,
             'price'=>$request->price,
             'description'=>$request->description,
             'stock'=>$request->stock,
             'img_path'=>$image

         ]);
         return redirect('product');

    }
    public function edit($id)
    {
        $product=Product::find($id);
        return view('updateproduct',compact('product'));
    }
    public function updateproduct (Request $request, Product $product, $id){
        if($request->img_path){
            $image = time().'.'.$request->img_path->extension();

            $request->img_path->move(public_path('img'), $image);

        }
        else{
            $product= Product::findOrFail($id);
            $image=$product->img_path;
        }
        $up = Product::findOrFail($id);
        $up->update([
            'name'=>$request->name,
            'price'=>$request->price,
            'description'=>$request->description,
            'stock'=>$request->stock,
            'img_path'=>$image
        ]);
        return redirect('product');
    }
    
    public function destroy($id)
    {
        $del = Product::find($id);
        $del->delete();
        return redirect('product');
    }
}
