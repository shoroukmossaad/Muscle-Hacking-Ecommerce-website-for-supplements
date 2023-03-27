<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Cart;
use Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //

    function create($id, $amount, $user)
    {
        // if (Auth::user()) {
        $product = Product::where('id', $id)->first();
        if ($product->amount > 0) {
            // $data['user_id'] = Auth::user()->id;
            $data['user_id'] = $user;
            $data['product_id'] = $id; //product id;
            $data['amount'] = $amount; //recieved amount from user
            $cart = Cart::create($data);

            return response()->json([
                'status' => true,
                'data' => $cart,


            ]);
        } else {
            return response()->json([
                'status' => false,
                'data' => 'faild',


            ]);
            // redirect('/login');
            // redirect()->back();

            // }
        }
        // else{ return response()->json(['status' => false, 'data' =>'faild not auth user']);}

    }
    function get_all($id)
    {

        $cart = Cart::where('user_id', $id)->with('product')->get();
        // $cart;

        return response()->json([
            'status' => true,
            'data' => $cart,


        ]);
    }

    function delete_from_cart($id)
    {
        $product = Product::where('id', $id);


    }
}
