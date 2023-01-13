<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Movie;
use App\Models\Genre;
use App\Models\Actor;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function addMovie(Request $request){
        $movie = new Movie();

        // Validation
        $validation = [
            // Rules
            'title' => 'required | min:2 | max:50',
            'description' => 'required | min:8',
            'genre' => 'required',
            'actor' => 'required',
            'charName' => 'required',
            'director' => 'required | min:3',
            'releaseDate' => 'required',
            'movieImage' => 'required | image',
            'movieBackgroundImage' => 'required | image'
        ];
        $validator = Validator::make($request->all(), $validation);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        // Thumbnail & background
        $thumbnail = $request->file('movieImage');
        $thumbnailName = time() . '.' . $thumbnail->getClientOriginalExtension();
        Storage::putFileAs('public/images/movies/thumbnail', $thumbnail, $thumbnailName);

        $background = $request->file('movieBackgroundImage');
        $backgroundName = time() . '.' . $background->getClientOriginalExtension();
        Storage::putFileAs('public/images/movies/background', $background, $backgroundName);


        // Insert data to $movie
        $movie->title = $request->title;
        $movie->description = $request->description;
        $movie->director = $request->director;
        $movie->release_date = $request->releaseDate;
        $movie->image = $thumbnailName;
        $movie->background_img = $backgroundName;
        //Save to db
        $movie->save();

        // Save genre & actors of the movie
        // attach each movie with their inputted genre
        $genres = Genre::whereIn('id', $request->genre)->get();
        $movie->genres()->attach($genres);

        // attaching actors and their respective character that they play in to the movie
        foreach($request->actor as $key => $actor){
            $actor = Actor::find($actor);
            $movie->actors()->attach($actor, ['character' => $request->charName[$key]]);
        }

        return redirect()->back();
    }

   public function editMovie(Request $request){
        $movie = Movie::find($request->id);

        // Validation
        $validation = [
            // Rules
            'title' => 'required | min:2 | max:50',
            'description' => 'required | min:8',
            'genre' => 'required',
            'actor' => 'required',
            'charName' => 'required',
            'director' => 'required | min:3',
            'releaseDate' => 'required',
            'movieImage' => 'required | image',
            'movieBackgroundImage' => 'required | image'
        ];
        $validator = Validator::make($request->all(), $validation);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        // Thumbnail & background
        $thumbnail = $request->file('movieImage');
        $thumbnailName = time() . '.' . $thumbnail->getClientOriginalExtension();
        Storage::putFileAs('public/images/movies/thumbnail', $thumbnail, $thumbnailName);

        $background = $request->file('movieBackgroundImage');
        $backgroundName = time() . '.' . $background->getClientOriginalExtension();
        Storage::putFileAs('public/images/movies/background', $background, $backgroundName);

        // Insert data to $movie
        $movie->title = $request->title;
        $movie->description = $request->description;
        $movie->director = $request->director;
        $movie->release_date = $request->releaseDate;
        $movie->image = $thumbnailName;
        $movie->background_img = $backgroundName;
        //Save to db
        $movie->save();

        // Save genre & actors of the movie
        // attach each movie with their newly inputted genre
        $genres = Genre::whereIn('id', $request->genre)->get();
        $movie->genres()->sync($genres);

        // updating actors and their respective character that they play in to the movie
        $newRoles = array();
        foreach($request->actor as $key => $actor){
            $newRoles[$actor] = ['character' => $request->charName[$key]];
        }
        $movie->actors()->sync($newRoles);
        return redirect('/movie/detail/'.$movie->id);
   }

   public function movieDetail(Request $request){
        // Search movie based on id
        $movie = Movie::find($request->id);
        $user = Auth::user();
        $randomMovies = Movie::all()->shuffle()->take(8);
        $watchlist = [];
        foreach($randomMovies as $i => $rm){
            $status = ($user->movies()->where('movie_id', $rm->id)->exists()) ? true : false;
            $watchlist[$i] = [$rm->id => $status];
        }

        return view('contents.movie-detail', ['movie' => $movie, 'randomMovies' => $randomMovies, 'status' => $watchlist]);
   }

   public function deleteMovie(Request $request){
        $movie = Movie::find($request->id);
        $movie->delete();
        return redirect('/');
   }

   public function homePage(){
        $heroMovies = Movie::inRandomOrder()->take(3)->get();
        // $popular = DB::table('movies')->join('genre_movie', 'movies.id', '=', 'genre_movie.movie_id')->select('movies.*', DB::raw('count(*) as total_added'))->groupBy('movies.id')->orderBy('total_added', 'desc')->get();
        $allMovies = Movie::all();
        $genres = Genre::all();

        if(Auth::check()){
            $watchlist = [];
            foreach($allMovies as $i => $am){
                $status = (Auth::user()->movies()->where('movie_id', $am->id)->exists()) ? true : false;
                $watchlist[$i] = [$am->id => $status];
            }
        }else{
            $watchlist[0] = false;
        }
        return view('contents.home', ['heroMovies' => $heroMovies, 'allMovies' => $allMovies, 'genres' => $genres, 'status' => $watchlist]);
   }

   public function searchMovie(Request $request){
        $movies = Movie::where('title', 'LIKE', "%$request->title%");
        return view('contents.home', ['movies' => $movies]);
   }

   public function addMovieView(){
        $actors = Actor::all();
        $genres = Genre::all();
        return view('contents.create-movie', ['actors' => $actors, 'genres' => $genres]);
   }

   public function editMovieView(Request $request){
        $movie = Movie::find($request->id);
        $actors = Actor::all();
        $genres = Genre::all();
        return view('contents.edit-movie', ['movie' => $movie, 'actors' => $actors, 'genres' => $genres]);
    }

    public function ascendingFilter(){
        $movies = Movie::groupBy('title')->orderBy('asc');
        return view('contents.home', ['movies' => $movies]);
    }

    public function descendingFilter(){
        $movies = Movie::groupBy('title')->orderBy('desc');
        return view('contents.home', ['movies' => $movies]);
    }

    public function latestFilter(){
        $movies = Movie::groupBy('release_date')->orderBy('desc');
        return view('contents.home', ['movies' => $movies]);
    }
}
