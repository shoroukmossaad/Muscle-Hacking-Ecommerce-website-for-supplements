<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\Settings;
use App\Models\User;
use Illuminate\Http\Request;

class SettingsController extends Controller
{

    // admin settings
    function add_new(Request $request)
    {
        $request->validate([
            'key' => 'required|max:255',
            'value' => 'required|string||max:255',
            'user_id' => 'required',
        ]);

        $Setting = Settings::create([
            'key' => $request->key,
            'value' => $request->value,

        ]);

        return response()->json([
            $Setting

        ]);
    }

    function update(Request $request){

    }




}
