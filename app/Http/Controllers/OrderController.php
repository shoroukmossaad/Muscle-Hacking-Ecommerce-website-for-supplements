<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //

function order_view(){
    return view('Order.order');
}

    function order(Request $request)
    {
        if (Auth::user() && session('cart')) {
            $cart = session()->get('cart');
            $order=new Order;
            $order->user_id =$cart['user_id'];
            for($i=0;$i<count($cart['quantity']);$i++) {

                // $order->
            }
        }
    }
}
