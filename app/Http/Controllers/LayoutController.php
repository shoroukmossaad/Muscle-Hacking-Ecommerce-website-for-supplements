<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function search()
    {
        if ($_GET('query') !== null) {
            $keyword = $_GET('query');
            $products = Product::where('title', "LIKE", '%' . $keyword . '%')->get();
            return view('Home.allproducts', compact('products'));
        }

    }
}
