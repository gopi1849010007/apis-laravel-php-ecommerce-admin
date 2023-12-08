<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\products;
use App\Http\Controllers\Site_user_Controller;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\ProductCategoryController;

use App\Http\Controllers\ProductItemController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();


});

Route::get('/data', function () {
    return 'Hello World';
});

Route::get('/all_products', [products::class, 'all_products']);

Route::post('/set_user',[Site_user_Controller::class,'set_user']);

Route::get('/get_user',[Site_user_Controller::class,'get_user']);

Route::post('/set_product',[ProductController::class,'set_product']);

Route::get('/get_product',[ProductController::class,'get_product']);


Route::post('/set_category',[ProductCategoryController::class,'set_category']);

Route::get('/get_category',[ProductCategoryController::class,'get_category']);


Route::post('/set_product_item',[ProductItemController::class,'set_product_item']);

Route::get('/get_product_item',[ProductItemController::class,'get_product_item']);
Route::post('/login',[Site_user_Controller::class,'login']);