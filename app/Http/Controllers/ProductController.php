<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index (){
        $products = Product::all();

        return view ('products.index', [
            'products'=>$products
        ]);
    }

    public function sort($sort){
        $sorts = [
            'bylow' => $products = Product::orderBy('price','asc')->get(),
            'byhigh' => $products = Product::orderBy('price','desc')->get()
        ];

        return view ('products.index', [
            'products'=>$sorts[$sort]
        ]);
    }
    
    public function show (){
        $products = Product::where('featured','true')->get();
        return view ('welcome', [
            'products'=>$products
        ]);
    }
}

