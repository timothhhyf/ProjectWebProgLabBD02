@extends('layouts.template')

@section('title', 'Edit Actor')

@section('content')

    <link rel="stylesheet" href="//db.onlinewebfonts.com/c/b30ffe63cc57ffdba315d296d0ca85b0?family=NTF-Grand-Regular" type="text/css"/>

    <div class="edit-actor-content">
        <div class="header-text-edit-actor">
            <h3>Edit Actor</h3>
        </div>
        <div class="edit-actor-form">
            <form action="" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group edit-actor">
                    <label for="inputActorName" class="col-sm-2 col-form-label">Name</label>
                    <input value="OldName" type="actorName" name="actorName" class="form-control edit-actor" id="inputActorName" aria-describedby="actorNameHelp">
                </div>
                <div class="form-group edit-actor">
                    <label for="inputGender" class="col-sm-2 col-form-label">Gender</label>
                    <select class="form-control edit-actor" name="actorGender" id="" required>
                        {{-- mungkin dibikin if sesuai value kalau mau lebi bagus --}}
                        <option value="" selected>{{--oldvalue--}}male/female</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="form-group edit-actor">
                    <label for="inputBiography" class="col-sm-2 col-form-label">Biography</label>
                    <textarea name="actorBio" class="form-control edit-actor" id="bioTextArea" rows="6">{{--oldbio--}}</textarea>
                </div>
                <div class="form-group edit-actor">
                    <label for="inputActorDOB" class="col-sm-2 col-form-label">Date of birth</label>
                    <input type="date" name="actorDOB" class="form-control edit-actor" id="inputActorDOB" aria-describedby="actorDOBHelp">
                </div>
                <div class="form-group edit-actor">
                    <label for="inputActorPOB" class="col-sm-2 col-form-label">Place of birth</label>
                    <input value="OldPOB" type="actorPOB" name="actor-POB" class="form-control edit-actor" id="inputActorPOB" aria-describedby="actorPOBHelp">
                </div>
                <div class="form-group edit-actor">
                    <label for="inputImageURL" class="col-sm-2 col-form-label">Image URL</label>
                    <input class="form-control edit-actor" type="file" id="formImageFile" name="actorImage">
                </div>
                <div class="form-group edit-actor">
                    <label for="inputActorPopularity" class="col-sm-2 col-form-label">Popularity</label>
                    <input value="OldPopularity" type="actorPopularity" name="actorPopularity" class="form-control edit-actor" id="inputActorPopularity" aria-describedby="actorPopularityHelp">
                </div>
                <button type="submit" class="btn btn-danger edit-actor">Edit</button>
            </form>
        </div>
    </div>

@endsection



