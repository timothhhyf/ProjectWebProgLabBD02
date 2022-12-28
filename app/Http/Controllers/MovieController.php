<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieControlelr extends Controller
{
   public function addMovie(Request $request){
        $movie = new Movie();

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
        // $movie->actor = $request->actor;
        // $movie->charName = $request->charName;
        $movie->director = $reques->director;
        $movie->release_date = $request->releaseDate;
        $movie->image = $thumbnailName;
        $movie->background_img = $backgroundName;

        //Save to db
        $movie->save();
        return redirect()->back();
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
        // $movie->actor = $request->actor;
        // $movie->charName = $request->charName;
        $movie->director = $reques->director;
        $movie->release_date = $request->releaseDate;
        $movie->image = $thumbnailName;
        $movie->background_img = $backgroundName;

        //Save to db
        $movie->save();
        return redirect()->back();
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
        // popular
        $allMovies = Movie::all();
        return redirect("/", ['heroMovies' => $heroMovies, 'allMovies' => $allMovies]);
   }

   public function searchMovie(Request $request){
        $movies = Movie::where('title', 'LIKE', "%$request->title%");
        return view('contents.home', ['movies' => $movies]);
   }
}
