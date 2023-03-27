<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    function index()
    {
        $items = 0;
        $x = 0;
        $total_price = 0;
        $allprices = [];
        $i = 0;
        if (Auth::user()) {
            $carts = Cart::where('user_id', Auth::user()->id)->get();

            foreach ($carts as $cart) {
                $items += $cart->amount;
                $products = Product::where('id', $cart->product_id)->get();
                foreach ($products as $product) {
                    $x++;
                    $total_price += $cart->amount * $product->price;
                    $allprices[$i] = $product->price;
                    $i++;
                }
            }


            return view('Cart.cart', ["carts" => $carts, "items" => $items, "total_price" => $total_price, "allprices" => $allprices]);
        }
        return view('Cart.cart', ["items" => $items, "total_price" => $total_price, "allprices" => $allprices]);

    }

    // function addcart( $id)
    // {
    //     if (Auth::user()) {

    //         $user = auth()->user();
    //         $cart = new Cart;
    //         $cart->product_id = $id;
    //         $cart->user_id = $user->id;
    //         $cart->amount = 1;
    //         $cart->save();
    //         return redirect()->back();
    //     } else {
    //         return redirect('login');
    //     }
    // }
    function addcart($id)
    {
        if (Auth::user()) {
            $product = Product::findOrFail($id);
            $cart = session()->get('cart', []);

            if (isset($cart[$id])) {
                $cart[$id]['quantity']++;
            } else {
                $cart[$id] = [
                    'product_name' => $product->title,
                    'product_id'=>$product->id,
                    'quantity' => 1,
                    'price' => $product->price,
                    'photo' => $product->image,
                    'user_id' => Auth::user()->id,

                ];
            }
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart  successfully!');
        } else {
            return redirect('login');
        }
    }

    // function remove($id)
    // {
    //     $cart = Cart::find($id);
    //     $cart->delete();
    //     return redirect()->back();

    // }


    function remove($id)
    {

        $cart = session()->get('cart');
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        return redirect()->back();

    }
}
