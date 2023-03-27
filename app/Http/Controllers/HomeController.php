<?php

namespace App\Http\Controllers;

use App\Http\Controllers\API\CartController;
use Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::get();
        $categories = Category::get();
        $items = 0;
        if (Auth::user()) {
            $cart = Cart::where('user_id', Auth::user()->id)->get();
            foreach ($cart as $cart) {
                $items += $cart->amount;
            }
            return view('Home.home', ["products" => $products, "categories" => $categories, "carts" => $cart, "items" => $items]);
        } else {
            return view('Home.home', ["products" => $products, "categories" => $categories, "items" => $items]);


        }

    }
    function layout()
    {
        $items = 0;

        if (Auth::user()) {
            $carts = Cart::where('user_id', Auth::user()->id)->get();
            foreach ($carts as $cart) {
                $items += $cart->amount;
            }
        }
        return view("Home.productpage", ["carts" => $carts, "items" => $items]);


    }


    public function home(){
        $blogs = Product::latest()->take(4)->get();
        return view("index" , ['latest_blogs' => $blogs]);
    }
}
