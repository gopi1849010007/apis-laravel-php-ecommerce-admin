<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product_item;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ProductItemController extends Controller
{
  
    function set_product_item(Request $req){
        $product_item=new Product_item;
        $product_item->sku=$req->input('sku');
        $product_item->product_image=$req->file('path')->store('product_item','public');
        
        $product_item->price=$req->input('price');
        $product_item->product_id=$req->input('product_id');
        $product_item->save();
        return $product_item;
}


function get_product_item(){
    $product_items=Product_item::all();

    return($product_items);
}


}
