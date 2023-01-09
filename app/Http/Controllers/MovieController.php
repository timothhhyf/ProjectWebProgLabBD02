<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Genre;
use App\Models\Actor;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
   public function addMovie(Request $request){
        $movie = new Movie();

        $title = $request->title;
        $description = $request->description;
        $genre = $request->genre;
        $actor = $request->actor;
        $charName = $request->charName;
        $director = $request->director;
        $releaseDate = $request->releaseDate;
        // Thumbnail & background
        $thumbnail = $request->file('movieImage');
        $thumbnailName = time() . '.' . $thumbnail.getClientOriginalExtension();
        Storage::putFileAs('public/images/movies/thumbnail', $thumbnail, $thumbnailName);

        $background = $request->file('movieBackgroundImage');
        $backgroundName = time() . '.' . $background.getClientOriginalExtension();
        Storage::putFileAs('public/images/movies/background', $background, $backgroundName);

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
            'thumbnail' => 'required | image',
            'background' => 'required | image'
        ];
        $validator = Validator::make($request->all(), $validation);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        // Insert data to $movie
        $movie->title = $request->title;
        $movie->description = $request->description;
        // $movie->genre = $request->genre;
        $genres = Genre::whereIn('id', $genre)->get();
        $movie->genres()->attach($genres);
        // $movie->actor = $request->actor;
        $actors = Actor::whereIn('id', $actor)->get();
        $movie->actors()->attach($actors, ['character' => $charName]);
        // $movie->charName = $request->charName;
        $movie->director = $reques->director;
        $movie->release_date = $request->releaseDate;
        $movie->image = $thumbnailName;
        $movie->background_img = $backgroundName;

        //Save to db
        $movie->save();
        return redirect("/");
   }

   public function editMovie(Request $request){
        $movie = Movie::find($request->id);

        $title = $request->title;
        $description = $request->description;
        $genre = $request->genre;
        $actor = $request->actor;
        $charName = $request->charName;
        $director = $reques->director;
        $releaseDate = $request->releaseDate;
        // Thumbnail & background
        $thumbnail = $request->file('thumbnail');
        $thumbnailName = time() . '.' . $thumbnail.getClientOriginalExtension();
        // Storage::putFileAs('public/images/movies/thumbnail', $thumbnail, $thumbnailName);

        $background = $request->file('background');
        $backgroundName = time() . '.' . $background.getClientOriginalExtension();
        // Storage::putFileAs('public/images/movies/background', $background, $backgroundName);


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
            'thumbnail' => 'required | image',
            'background' => 'required | image'
        ];
        $validator = Validator::make($request->all(), $validation);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        // Insert data to $movie
        $movie->title = $request->title;
        $movie->description = $request->description;
        // $movie->genre = $request->genre;
        $genres = Genre::whereIn('id', $genre)->get();
        $movie->genres()->attach($genres);
        // $movie->actor = $request->actor;
        $actors = Actor::whereIn('id', $actor)->get();
        $movie->actors()->attach($actors, ['character' => $charName]);
        // $movie->charName = $request->charName;
        $movie->director = $request->director;
        $movie->release_date = $request->releaseDate;
        $movie->image = $thumbnailName;
        $movie->background_img = $backgroundName;
        //Save to db
        $movie->save();
        return redirect("/");
   }

   public function movieDetail(Request $request){
        // Search movie based on id
        $movie = Movie::find($request->id);
        return view('', ['movie' => $movie]);
   }

   public function deleteMovie(Request $request){
        $movie = Movie::find($request->id);
        $movie->delete();
        return redirect('/');
   }

   public function homePage(){
        $heroMovies = Movie::inRandomOrder()->take(3)->get();
        $popular = DB::table('movies')->join('genre_movie', 'movies.id', '=', 'genre_movie.movie_id')->select('movies.*', DB::raw('count(*) as total_added'))->groupBy('movies.id')->orderBy('total_added', 'desc')->get();
        $allMovies = Movie::all();
        return redirect("/", ['heroMovies' => $heroMovies, 'popular' => $popular, 'allMovies' => $allMovies]);
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

   public function editMovieView(){
    $actors = Actor::all();
    $genres = Genre::all();
    return view('contents.edit-movie', ['actors' => $actors, 'genres' => $genres]);
}
}
