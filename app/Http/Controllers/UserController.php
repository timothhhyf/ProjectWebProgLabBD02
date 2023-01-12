<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use App\Models\User;
use App\Models\Movie;
use Hash;

class UserController extends Controller
{
    //
    public function login(Request $request){
        $user = User::where('email', 'like', $request->email)->get()->first();
        $validation = [
            'email' => 'required',
            'password' => 'required'
        ];

        $validator = Validator::make($request->all(), $validation);
        //field not filled
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }

        //email not found
        if($user == null){
            $errMsg = "Email not found!";
            return back()->withErrors(['errMsg' => $errMsg]);
        }

        $creds = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        $remember = $request->remember;

        if(Auth::attempt($creds, $remember)){
            // User authenticated
            return redirect('/');
        }else{
            // Wrong Password
            $errMsg = "Password is incorrect!";
            return back()->withErrors(['errMsg' => $errMsg]);
        }
    }

    public function register(Request $request){
        $user = new User();

        // Ganti nama fieldnya sesuai sama field di formnya
        $username = $request->username;
        $email = $request->email;
        $password = $request->password;

        // Date Joined  = current time stamp (?)

        // Validation
        $validation = [
            // Rules
            'username' => 'required | min:5 | unique:users,name',
            'email' => 'required | email | unique:users,email',
            'password' => 'required | alpha_num | confirmed'
        ];
        $validator = Validator::make($request->all(), $validation);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        // Insert data to $user
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->dob = null;
        $user->phone = "";
        $user->image = "";

        //Save to db
        $user->save();
        return redirect('/login');
    }


    public function updateProfile(Request $request){
        // find logged in user
        $user = User::find(Auth::user()->id);
        // validation
        $validation = [
            'username' => 'required',
            'email' => 'required | email',
            'dob' => 'required',
            'phone' => 'required | min:5 | max:13'
        ];

        $validator = Validator::make($request->all(), $validation);
        if($validator->fails()){
            return back()->withErrors($validator);
        }

        // insert data to user
        $user->name = $request->username;
        $user->email = $request->email;
        $user->dob = $request->dob;
        $user->phone = $request->phone;

        $user->save();
        return redirect('/');
    }

    public function saveProfilePic(Request $request){
        $user = User::find(Auth::user()->id);

        $validation = [
            'image' => 'required'
        ];

        $validator = Validator::make($request->all(), $validation);
        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $image = $request->file('image');
        $imageName = time() . '.' . $image.getClientOriginalExtension();
        // Storage::putFileAs('public/images/users', $image, $imageName);
        $user->image = $imageName;
        return redirect()->back();
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function addToWatchlist(Request $request){
        $movie = Movie::find($request->id);
        $user = Auth::user();
        $user->movies()->attach($movie, ['status' => 'Planning']);

        return redirect()->back();
    }

    public function removeFromWatchlist(Request $request){
        $movie = Movie::find($request->id);
        $user = Auth::user();
        $user->movies()->detach($movie);

        return redirect()->back();
    }

    public function getWatchlist(){
        $user = User::find(Auth::user()->id);
        $movies = $user->movies;
        return view('contents.watchlist', ['movies' => $movies]);
    }

    public function updateStatus(Request $request){
        $movie = Movie::find($request->id);
        $status = $request->status;
        $user = User::find(Auth::user()->id);
        $user->movies()->updateExistingPivot($movie, ['status' => $status]);
        return redirect()->back();
    }

    public function filterWatchlist(Request $request){
        $movies = Movie::wherePivot('status', $request->status);
        return view('contents.watchlist', ['movies' => $movies]);
    }
}
