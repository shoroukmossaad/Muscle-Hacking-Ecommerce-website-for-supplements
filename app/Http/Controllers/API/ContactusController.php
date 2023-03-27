<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Validator;

class ContactusController extends Controller
{
    //
    function index(Request $request)
    {
        $data = $request->all();


        $validator = Validator::make($data, [
            'name' => 'required',
            'email' => 'required|email|max:191',
            'phone' => 'required|numeric| min:10|max:11',
            'subject' => 'required|min:10',
            'message' => 'required|max:191',
        ]);
        if ($validator->fails()) {

            return response()->json([
                'validation_errors' => $validator->messages(),
            ]);
        } else {
            $contact = Contact::create($data, [
            ]);

            return response()->json([
                'status' => 200,
                'message' => 'message success',
            ]);

        }
    }
}
