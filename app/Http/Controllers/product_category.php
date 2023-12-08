<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class product_category extends Controller
{
   function all_category(Request $request){


    return "all-category"; 
   }

   function add_category(){

    return "add-category";
   }

   function update_category(){
    return "update-category";
   }
   function delete_category(){
    return "delete-category";
   }



}
