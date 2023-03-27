<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\API\Auth\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoryController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get("/", [HomeController::class, "index"]);
Route::get('register', function () {
    return view('Register.register');
});
Route::get('login', function () {
    return view('Login.login');
});

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout']);


Route::post('addtocart/{id}', [CartController::class, 'addcart'])->name('add_to_cart');
Route::get('removefromcart/{id}', [CartController::class, 'remove']);
Route::get('/cart', [CartController::class, "index"]);
Route::get('/order', [OrderController::class, "order_view"]);
Route::get('/shopbycategory/{id}', [ProductController::class, "get_by_category"]);




Route::get('/product/{id}', [ProductController::class, 'get_one']);
Route::get('search', [LayoutController::class, 'search']);


//ADMIN

Route::get('dashboard', [DashboardController::class, "index"]);
Route::get('dashboard/addproduct', [ProductController::class, 'create']);
Route::post('/store', [ProductController::class, 'store']);
Route::get('dashboard/addcategory', [CategoryController::class, 'create']);
Route::post('/storecategory', [CategoryController::class, 'store']);





// Route::post('register',[AuthController::class,'register']);
// Route::post('login',[AuthController::class,'login']);

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::post('add_gategory',[CategoryController::class ,'create']);
// Route::post('update_gategory/{id}',[CategoryController::class ,'update']);
// Route::get('delete_gategory/{id}',[CategoryController::class ,'delete']);

// Route::get('read_gategory',[CategoryController::class ,'get_all']);
// Route::get('read_gategory/{id}',[CategoryController::class ,'get_one']);


// //admin CRUD routes
// Route::post('add_product',[ProductController::class ,'create']);
// Route::post('update_product/{id}',[ProductController::class ,'update']);
// Route::post('read_product',[ProductController::class ,'get_all']);
// Route::get('delete_product/{id}',[ProductController::class ,'delete']);

// Route::get('delete_product',[ProductController::class ,'get_all']);
// Route::get('delete_product/{id}',[ProductController::class ,'get_one']);

// //users routes
// Route::post('add_to_cart/{id}/{amount}/{user_id}',[CartController::class,'create']);
// Route::get('get_all/{id}',[CartController::class,'get_all']);
// Route::post('add_to_cart/{id}/{amount}/{user_id}',[CartController::class,'create']);
// Route::get('',[UserController::class,'add_to_wishlist']);
// Route::get('' ,  [ProductController::class , "search"]);


// //contact routes

// Route::post('contact',[ContactController::class],);
