<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product_category;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ProductCategoryController extends Controller
{
   function set_category(Request $req){

    $product_category=new Product_category;
    $product_category->category_name=$req->input('category_name');
    $product_category->save();

    return $product_category;


   }

   function get_category(Request $req){
      $categories=Product_category::all();

    return $categories;
   }
}
