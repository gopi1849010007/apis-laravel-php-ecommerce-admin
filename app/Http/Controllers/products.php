<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class products extends Controller
{
   
  function all_products(Request $request){
    return "all-products";
  }
  function add_product(Request $request){

    return "add-products";
  }
  function delete_product(Request $request){
    return "delete-products";
  }
  function update_product(Request $request){
    return "update-products";
  }



}
