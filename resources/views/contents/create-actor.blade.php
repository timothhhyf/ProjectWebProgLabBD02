@extends('layouts.template')

@section('title', 'Add Actor')

@section('content')

    <link rel="stylesheet" href="//db.onlinewebfonts.com/c/b30ffe63cc57ffdba315d296d0ca85b0?family=NTF-Grand-Regular" type="text/css"/>

    <div class="add-actor-content">
        <div class="header-text-add-actor">
            <h3>Add Actor</h3>
        </div>
        <div class="add-actor-form">
            <form action="" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group add-actor">
                    <label for="inputActorName" class="col-sm-2 col-form-label">Name</label>
                    <input type="actorName" name="actor-name" class="form-control add-actor" id="inputActorName" aria-describedby="actorNameHelp">
                </div>
                <div class="form-group add-actor">
                    <label for="inputGender" class="col-sm-2 col-form-label">Gender</label>
                    <select class="form-control add-actor" name="actor-gender" id="" required>
                        <option value="" disabled selected>--Open this select menu--</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="form-group add-actor">
                    <label for="inputBiography" class="col-sm-2 col-form-label">Biography</label>
                    <textarea name="actor-bio" class="form-control add-actor" id="bioTextArea" rows="6"></textarea>
                </div>
                <div class="form-group add-actor">
                    <label for="inputActorDOB" class="col-sm-2 col-form-label">Date of birth</label>
                    <input type="date" name="actorDOB" class="form-control add-actor" id="inputActorDOB" aria-describedby="actorDOBHelp">
                </div>
                <div class="form-group add-actor">
                    <label for="inputActorPOB" class="col-sm-2 col-form-label">Place of birth</label>
                    <input type="actorPOB" name="actor-POB" class="form-control add-actor" id="inputActorPOB" aria-describedby="actorPOBHelp">
                </div>
                <div class="form-group add-actor">
                    <label for="inputImageURL" class="col-sm-2 col-form-label">Image URL</label>
                    <input class="form-control add-actor" type="file" id="formImageFile" name="actorImage">
                </div>
                <div class="form-group add-actor">
                    <label for="inputActorPopularity" class="col-sm-2 col-form-label">Popularity</label>
                    <input type="actorPopularity" name="actor-popularity" class="form-control add-actor" id="inputActorPopularity" aria-describedby="actorPopularityHelp">
                </div>
                <button type="submit" class="btn btn-danger add-actor">Create</button>
            </form>
        </div>
    </div>

@endsection



