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

        // Validation
        $validation = [
            // Rules
        ];
        $validator = Validator::make($request->all(), $validation);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        // Insert data to $movie


        //Save to db
        $movie->save();
        return redirect()->back();
   }

   public function movieDetail(Request $request){
        // Search movie based on (id or name ini terserah sih)
        $movie = Movie::find($request->id);


        return view('', ['movie' => $movie]);
   }
}
