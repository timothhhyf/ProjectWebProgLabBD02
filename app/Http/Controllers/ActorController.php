<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
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
        // Search actor based on id
        $actor = Actor::find($request->id);

        return view('contents.actor-detail', ['actor' => $actor]);
    }

    public function addActor(Request $request){
        $actor = new Actor();

        $name = $request->actorName;
        $gender = $request->actorGender;
        $biography = $request->actorBio;
        $dob = $request->actorDOB;
        $pob = $request->actorPOB;
        $popularity = $request->actorPopularity;
        // Image save
        $image = file('actorImage');
        $imageName = time() . '.' . $image.getClientOriginalExtension();
        Storage::putFileAs('public/images/actors', $image, $imageName);

        // Validation
        $validation = [
            // Rules
            'name' => 'required | min:3',
            'gender' => 'required',
            'biography' => 'required | min:10',
            'dob' => 'required',
            'pob' => 'required',
            'image' => 'required | image',
            'popularity' => 'required | numeric'
        ];
        $validator = Validator::make($request->all(), $validation);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        // Insert data to $actor
        $actor->name = $request->name;
        $actor->gender = $request->gender;
        $actor->biography = $request->biography;
        $actor->dob = $request->dob;
        $actor->pob = $request->pob;
        $actor->popularity = $request->popularity;
        $actor->image = $imageName;

        //Save to db
        $actor->save();
        return redirect()->back();
    }

    public function updateActor(Request $request){
        $actor = Actor::find($request->id);

        $name = $request->actorName;
        $gender = $request->actorGender;
        $biography = $request->actorBio;
        $dob = $request->actorDOB;
        $pob = $request->actorPOB;
        $popularity = $request->actorPopularity;
        // Image save
        $image = file('actorImage');
        $imageName = time() . '.' . $image.getClientOriginalExtension();
        Storage::putFileAs('public/images/actors', $image, $imageName);

        // Validation
        $validation = [
            // Rules
            'name' => 'required | min:3',
            'gender' => 'required',
            'biography' => 'required | min:10',
            'dob' => 'required',
            'pob' => 'required',
            'image' => 'required | image',
            'popularity' => 'required | numeric'
        ];
        $validator = Validator::make($request->all(), $validation);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        // Insert data to $actor
        $actor->name = $request->name;
        $actor->gender = $request->gender;
        $actor->biography = $request->biography;
        $actor->dob = $request->dob;
        $actor->pob = $request->pob;
        $actor->popularity = $request->popularity;
        $actor->image = $imageName;

        //Save to db
        $actor->save();
        return redirect()->back();
    }

    public function deleteActor(Request $request){
        $actor = Actor::find($request->id);
        $actor->delete();
        return redirect()->back();
    }
}
