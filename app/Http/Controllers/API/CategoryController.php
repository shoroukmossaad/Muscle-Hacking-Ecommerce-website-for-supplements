<?php

namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function create(Request $request)
    {
        $data = $request->all();

        $validator = \Validator::make($data, [
            'title' => "required|min:5|max:15",

            'image' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'massege' => $validator->messages(),
                'status' => false,
            ]);


        } else {
            $category=new Category();
            $category=$category->create($data);
            return response()->json([
                'massege' => 'success category',
                'status' => true,
                'category' => $category
            ]);
        }
    }
//Category $id
    function delete( $id){
        $category = Category::find($id);
        $category->delete();
        return response()->json([
           'massege' =>'success delete category',
           'status' => true,
        ]);
    }

    function update(  $id,Request $request){

        $data = $request->all();
        $validator = \Validator::make($data, [
            'title' => "required|min:5|max:15",

            'image' =>'required',
            
        ]);
        if ($validator->fails()) {
            return response()->json([
               'massege' => $validator->messages(),
               'status' => false,
            ]);
        }
        else{
            $category = Category::find($id);
            $category->update($data);
            return response()->json([
              'massege' =>'success update category',
              'status' => true,
               'category' => $category
            ]);
        }
    }
}
