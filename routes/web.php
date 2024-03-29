<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ActorController;
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


Route::get('/login', function(){
    return view('contents.login');
});

Route::get('/register', function(){
    return view('contents.register');
});

// return view buat test
// Route::view('/edit-movie', 'contents.edit-movie');
// Route::view('/create-movie', 'contents.create-movie');
// Route::view('/profile', 'contents.profile');
// Route::view('/create-actor', 'contents.create-actor');
// Route::view('/edit-actor', 'contents.edit-actor');
// Route::view('/movie-detail', 'contents.movie-detail');
// Route::view('/actors-list', 'contents.actor');
// Route::view('/actor-detail', 'contents.actor-detail');
// Route::view('/watchlist', 'contents.watchlist');

Route::post('/login/authLogin', [UserController::class, 'login']);
Route::post('/register/addUser', [UserController::class, 'register']);
Route::post('/profile/saveChanges', [UserController::class, 'updateProfile']);
Route::post('/watchlist/{id}/changeStatus', [UserController::class, 'updateStatus']);
Route::post('/movie/create/addMovie', [MovieController::class, 'addMovie'])->middleware('adminCheck');
Route::post('/movie/edit/{id}/editMovie', [MovieController::class, 'editMovie'])->middleware('adminCheck');
Route::post('/actor/create/addActor', [ActorController::class, 'addActor'])->middleware('adminCheck');
Route::post('/actor/edit/{id}/editActor', [ActorController::class, 'updateActor'])->middleware('adminCheck');


Route::get('/actor/{id}/delete', [ActorController::class, 'deleteActor'])->middleware('adminCheck');
Route::get('/movie/delete/{id}', [MovieController::class, 'deleteMovie'])->middleware('adminCheck');
Route::get('/', [MovieController::class, 'homePage']);
Route::get('/filterGenre/{id}', [MovieController::class, 'genreFilter']);
Route::get('/filterA-Z', [MovieController::class, 'ascendingFilter']);
Route::get('/filterZ-A', [MovieController::class, 'descendingFilter']);
Route::get('/watchlist', [UserController::class, 'getWatchlist']);
Route::get('/profile', function(){ return view('contents.profile'); });
Route::get('/{id}/addToWatchlist', [UserController::class, 'addToWatchlist']);
Route::get('/{id}/removeFromWatchlist', [UserController::class, 'removeFromWatchlist']);
Route::get('/watchlist/search={name}', [UserController::class, 'search']);
Route::get('/watchlist/{status}', [UserController::class, 'filterWatchlist']);
Route::get('/movie/search={name}', [MovieController::class, 'searchMovie']);
Route::get('/movie/detail/{id}', [MovieController::class, 'movieDetail']);
Route::get('/movie/create', [MovieController::class, 'addMovieView'])->middleware('adminCheck');
Route::get('/movie/edit/{id}', [MovieController::class, 'editMovieView'])->middleware('adminCheck');
Route::get('/actor', [ActorController::class, 'allActors']);
Route::get('/actor/search={name}', [ActorController::class, 'searchActor']);
Route::get('/actor/detail/{id}', [ActorController::class, 'actorDetail']);
Route::get('/actor/create', function(){ return view('contents.create-actor'); })->middleware('adminCheck');
Route::get('/actor/edit/{id}', function(){ return view('contents.edit-actor'); })->middleware('adminCheck');
Route::get('/logout', [UserController::class, 'logout']);

