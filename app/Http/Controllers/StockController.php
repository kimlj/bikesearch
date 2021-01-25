<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\Product;
use App\Models\Shop;

class StockController extends Controller
{
    // public function index ($id){
    //     $products = Product::all();
    //     $stocks = Stock::all();


    //     return view ('products.stocks', [
    //         'stocks'=>$stocks[$id]
    //     ]);

    //     return view ('products.stocks', [
    //         'stocks'=>$sorts[$sort]
    //     ]);
    // }

    public function index($product_id){

        $shops = Stock::where('product_id',$product_id)->get();//this will return array containing shop_id and their corresponding stocks of the product
       
        
        //to do: store the shop_id and retrieve shop in shop table where shop_id = shop_id from $shops[array]

        //my approach: nested loop? or data relationships problem 

        
        foreach ($shops as $shop){
           $shop = $shop->shop_id;  
        }
        
        // $shop_displays = Shop::where('shop_id',$shop);
        return view ('products.stocks', [
            'shops'=>$shops
        ]);

    }
}
