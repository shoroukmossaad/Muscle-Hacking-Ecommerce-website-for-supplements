<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Password;
use Validator;

class AuthController extends Controller
{
    function register(Request $request)
    {
        $data = $request->all();


        $validator = Validator::make($data, [
            'username' => 'required|min:3|max:30',
            'email' => 'required|email|max:191|unique:users,email',
            'phone' => 'required|min:10|max:11|regex:/^([0-9\s\-\+\(\)]*)$/',
            'password' => 'required|min:8',

            // Password::mixedCase()
            //     ->letters()
            //     ->numbers()
            //     ->symbols()
            //     ->uncompromised(),
            'gender',

        ]);

        if ($validator->fails()) {
            return redirect('register');

        } else {
            $data['password'] = \Hash::make($request->password);
            $data['remember_token'] = \Str::random(64);

            $user = User::create($data, [
                'username' => $request->username,

            ]);

            return redirect('login');




        }
    }

    function login(Request $req)
    {
        $userCred = Auth::attempt(['email' => $req->email, 'password' => $req->password]);
        if ($userCred) {
            if (Auth::user()->role == "admin") {

                return redirect("dashboard");
            } else {
                return redirect("/");
            }
        } else {
            return redirect()->back();
        }
    }


    function logout()
    {
        if (Auth::check()) {
            Auth::logout(); //destroy session

            return redirect("/");
        }
    }
}
