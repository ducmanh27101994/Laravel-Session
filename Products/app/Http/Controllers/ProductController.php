<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    //
    function index(){
        $products = Product::all();
        return view('index',compact('products'));
    }

    function show($id){
        $productKey = 'product_'.$id;

        if (!Session::has($productKey)){
            Product::where('id',$id)->increment('view_count');
            Session::put($productKey,1);
        }
        $product = Product::find($id);
        return view('productIndex',compact('product'));
    }



}
