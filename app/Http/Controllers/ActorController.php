<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
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
        // Validation
        $validation = [
            // Rules
            'actorName' => 'required | min:3',
            'actorGender' => 'required',
            'actorBio' => 'required | min:10',
            'actorDOB' => 'required',
            'actorPOB' => 'required',
            'actorImage' => 'required | image',
            'actorPopularity' => 'required | numeric'
        ];

        $errorMsg = [
            'actorName.required' => "Name must be filled.",
            'actorName.min' => "The name must be longer than 3 characters.",
            'actorGender' => "Gender must be selected.",
            'actorBio.required' => "Biography must be filled.",
            'actorBio.min' => "Biography must be longer than 10 characters.",
            'actorDOB' => "Date of birth must be filled.",
            'actorPOB' => "Place of birth must be filled.",
            'actorImage.required' => "Image must be uploaded.",
            'actorImage.image' => "Image type is not supported.",
            'actorPopularity.required' => "Popularity must be filled.",
            'actorPopularity.numeric' => "Popularity must in numbers."
        ];

        $validator = Validator::make($request->all(), $validation, $errorMsg);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        // Image save
        $image = $request->file('actorImage');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        Storage::putFileAs('public/images/actors', $image, $imageName);

        // Insert data to $actor
        $actor->name = $request->actorName;
        $actor->gender = $request->actorGender;
        $actor->biography = $request->actorBio;
        $actor->dob = $request->actorDOB;
        $actor->pob = $request->actorPOB;
        $actor->popularity = $request->actorPopularity;
        $actor->image = $imageName;

        //Save to db
        $actor->save();
        return redirect()->back();
    }

    public function updateActor(Request $request){
        $actor = Actor::find($request->id);
        // Validation
        $validation = [
            // Rules
            'actorName' => 'required | min:3',
            'actorGender' => 'required',
            'actorBio' => 'required | min:10',
            'actorDOB' => 'required',
            'actorPOB' => 'required',
            'actorImage' => 'required | image',
            'actorPopularity' => 'required | numeric'
        ];

        $errorMsg = [
            'actorName.required' => "Name must be filled.",
            'actorName.min' => "The name must be longer than 3 characters.",
            'actorGender' => "Gender must be selected.",
            'actorBio.required' => "Biography must be filled.",
            'actorBio.min' => "Biography must be longer than 10 characters.",
            'actorDOB' => "Date of birth must be filled.",
            'actorPOB' => "Place of birth must be filled.",
            'actorImage.required' => "Image must be uploaded.",
            'actorImage.image' => "Image type is not supported.",
            'actorPopularity.required' => "Popularity must be filled.",
            'actorPopularity.numeric' => "Popularity must in numbers."
        ];
        $validator = Validator::make($request->all(), $validation, $errorMsg);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        // Image save
        $image = file('actorImage');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        Storage::putFileAs('public/images/actors', $image, $imageName);


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
        return redirect('/actor');
    }
}
