<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Auth;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    function create(){
        if(Auth::user()->role=='admin'){
         return view('Dashboard.add category');
     }
     }
    public function store(Request $request)
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
            'title' => "required|min:5|max:15",

            'image' => 'required',
        ]);
        if ($validator->fails()) {
            return 'add category failed';


        } else {
            $category=new Category();
            $category=$category->create($data);
            return redirect('dashboard');
        }
    }
}
