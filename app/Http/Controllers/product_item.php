<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class product_item extends Controller
{
   
    function all_products( Request $request){


        $data=DB::table('product_item')->where('price','960')  ->avg('price');




        return $data;
    }


    function add_product(Request $request){


        return "add-product";
    }

    function delete_product(Request $request){

        return "delete-data";

    }

    function update_product(Request $request){

        return "update-product";

    }



}
