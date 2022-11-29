<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class UserController extends Controller
{
    //
    public function register(Request $request){
        $user = new User();

        // Ganti nama fieldnya sesuai sama field di formnya
        $username = $request->username;
        $email = $request->email;
        $password = $request->password;
        $confPass = $request->confPass;

        // Date Joined  = current time stamp (?)

        // Validation
        $validation = [
            // Rules
        ];
        $validator = Validator::make($request->all(), $validation);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        // Insert data to $user


        //Save to db
        $user->save();
        return redirect()->back();
    }
}
