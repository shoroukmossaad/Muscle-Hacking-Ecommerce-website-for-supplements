<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Auth;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function create()
    {
        if (Auth::user()->role == 'admin') {
            return view('Dashboard.add product');
        }
    }
    function store(Request $request)
    {

        $data = $request->all();
        if ($request->hasFile('image')) {
            $image = $request->file("image");

            $rename_img = time() . "_muscle_hacker" . "." . $image->getClientOriginalExtension();
            $destination = public_path("/uploads");
            $image->move($destination, $rename_img);
            $data['image'] = $rename_img;
            // dd($data);
        }
        $validator = \Validator::make($data, [
            'title' => "required|min:5|max:150",
            'description' => 'required',
            'price' => 'required|numeric',
            'amount' => 'required|numeric',
            'category_id' => 'required|numeric',
            'image' => 'required',
        ]);
        if ($validator->fails()) {
            return $validator->messages('dfv') ;
            ;
        } else {

            // $data['user_id'] = Auth::user()->id;
            $product = new Product();
            $data['user_id'] = Auth::user()->id;
            $product = $product->create($data);
            return redirect('/');

        }
    }



    function get_one($id)
    {
        $product = Product::where('id', $id)->get();
        // return $products;
        return view("Home.productpage", ["product" => $product]);

    }

    function get_by_category($id)
    {

        $category=Category::where('id',$id )->get();
        // $title=$catory->title;

        $products = Product::where('category_id', $id)->get();
        return view("Home.productsbycategory", ['products' => $products]);
    }
}
