<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Auth;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //admin dashboard starts here
  

function get_all(){
    $products = Product::get();
    // return $products;
    return view("Home.allproducts" , ["products" =>  $products]);

}
function get_one($title){
    $products = Product::where('title', $title)->get();;
    // return $products;
    return view("Home.productpage" , ["products" =>  $products]);

}

    function delete($identifer)
    {
        if (Auth::user()->role == 'admin') {
            $product = Product::find($identifer);
            $product->delete();
            return response()->json([
                'status' => true,
                'message' => 'product deleted successfully',
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'product not deleted',
            ]);
        }
    }

    // to return view of edit for product
    function update($identifer, Request $request)
    {
        $data = $request->all();
        if (Auth::user()->role == 'admin') {
            $product = Product::find($identifer);
        }
    }
//admin dashboard ends here







}
