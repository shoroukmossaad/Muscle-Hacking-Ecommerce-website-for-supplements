<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Auth\AuthController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\CartController;

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

//auth routes
Route::post('register',[AuthController::class,'register']);
Route::post('login',[AuthController::class,'login']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('add_gategory',[CategoryController::class ,'create']);
Route::post('update_gategory/{id}',[CategoryController::class ,'update']);
Route::get('delete_gategory/{id}',[CategoryController::class ,'delete']);

Route::get('read_gategory',[CategoryController::class ,'get_all']);
Route::get('read_gategory/{id}',[CategoryController::class ,'get_one']);


//admin CRUD routes
Route::post('add_product',[ProductController::class ,'create']);
Route::post('update_product/{id}',[ProductController::class ,'update']);
Route::post('read_product',[ProductController::class ,'get_all']);
Route::get('delete_product/{id}',[ProductController::class ,'delete']);

Route::get('delete_product',[ProductController::class ,'get_all']);
Route::get('delete_product/{id}',[ProductController::class ,'get_one']);

//users routes
Route::post('add_to_cart/{id}/{amount}/{user_id}',[CartController::class,'create']);
Route::get('get_all/{id}',[CartController::class,'get_all']);
Route::post('add_to_cart/{id}/{amount}/{user_id}',[CartController::class,'create']);
Route::get('',[UserController::class,'add_to_wishlist']);
Route::get('' ,  [ProductController::class , "search"]);


//contact routes

Route::post('contact',[ContactController::class],);


