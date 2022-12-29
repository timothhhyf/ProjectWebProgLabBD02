<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('contents.home');
});

Route::get('/login', function(){
    return view('contents.login');
});

Route::get('/register', function(){
    return view('contents.register');
});

Route::view('/create-movie', 'contents.create-movie');
Route::view('/profile', 'contents.profile');
Route::post('/login/authLogin', [UserController::class, 'login']);
Route::post('/register/addUser', [UserController::class, 'register']);

Route::get('/movie/create', function(){
    return view('contents.create-movie');
});
