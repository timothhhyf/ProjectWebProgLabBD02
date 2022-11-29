<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actor;

class ActorController extends Controller
{
    //
    public function allActors(){
        $actors = Actor::all();

        return view('contents.actor', ['actors' => $actors]);
    }

    public function actorDetail(Request $request){
        // Search actor based on (id or name ini terserah sih)
        $actor = Actor::find($request->id);

        return view('contents.actor-detail', ['actor' => $actor]);
    }

    public function addActor(Request $request){
        $actor = new Actor();

        $name = $request->name;
        $gender = $request->gender;
        $biography = $request->biography;
        $dob = $request->dob;
        $pob = $request->pob;
        $popularity = $request->popularity;
        // Image save

        // Validation
        $validation = [
            // Rules
        ];
        $validator = Validator::make($request->all(), $validation);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        // Insert data to $actor


        //Save to db
        $actor->save();
        return redirect()->back();
    }
}
