<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function set_product(Request $req){
        $product=new Product;
        $product->category_id=$req->input('category_id');
        $product->name=$req->input('name');
        $product->description=$req->input('description');
        $product->product_image=$req->file('file')->store('products','public');
$product->save();
return $product;
    }

    function get_product(Request $req){
         $products=Product::all();
         return $products;
    }


   
}