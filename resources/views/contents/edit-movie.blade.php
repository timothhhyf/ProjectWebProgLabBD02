@extends('layouts.template')

@section('title', 'Edit Movie')

@section('content')

<div class="edit-movie-content">
    <div class="header-text-edit">
        <h3>Edit Movie</h3>
    </div>
    <div class="edit-movie-form">
        <form action="" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group edit-movie">
                <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
                <input value="Old Title" type="title" name="movie-title" class="form-control edit-movie" id="inputTitle" aria-describedby="titleHelp">
            </div>
            <div class="form-group edit-movie">
                <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
                <textarea name="movie-description" class="form-control edit-movie" id="descTextArea" rows="6">{{--oldvalue--}}</textarea>
            </div>
            <div class="form-group edit-movie">
                <label for="inputGenre" class="col-sm-2 col-form-label">Genre</label>
                <select class="form-select edit-movie" id="my-select" name="my-select[]" multiple>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                </select>
            </div>
            <div class="form-group edit-movie">
                <label for="inputActors" class="col-sm-2 col-form-label">Actors</label>
                <div id="ac-row">
                    <div class="actors-character" id="#actors-character">
                        <div class="actor-column">
                            <label for="inputActor" class="col-sm-2 col-form-label">Actor</label>
                            <input value="Old Actor" class="form-control edit-movie" type="text" name="movie-actors" minlength="3" list="actor-select">
                            <datalist name="actors-list" id="actor-select">
                                <option value="andrasda"></option>
                                <option value="andrew"></option>
                            </datalist>
                        </div>
                        <div class="character-column">
                            <label for="inputCharacter" class="col-sm-2 col-form-label" style="width: 120px">Character Name</label>
                            <input value="Old Character" type="character" name="actors-character" class="form-control edit-movie" id="inputCharacter" aria-describedby="characterHelp">
                        </div>
                    </div>
                </div>
                <div id="ac-row">
                    <div class="actors-character" id="#actors-character">
                        <div class="actor-column">
                            <label for="inputActor" class="col-sm-2 col-form-label">Actor</label>
                            <input value="Old Actor" class="form-control edit-movie" type="text" name="movie-actors" minlength="3" list="actor-select">
                            <datalist name="actors-list" id="actor-select">
                                <option value="andrasda"></option>
                                <option value="andrew"></option>
                            </datalist>
                        </div>
                        <div class="character-column">
                            <div class="span-char">
                                <label for="inputCharacter" class="col-sm-2 col-form-label" style="width: 120px">Character Name</label>
                                <a id="remove-btn"><i class="fa-solid fa-x"></i></a>
                            </div>
                            <input value="Old Character" type="character" name="actors-character" class="form-control edit-movie" id="inputCharacter" aria-describedby="characterHelp">
                        </div>
                    </div>
                </div>
                <div class="add-more-button">
                    <a class="btn btn-info add-more" id="add-btn">Add more</a>
                </div>
            </div>
            <div class="form-group edit-movie">
                <label for="inputDirector" class="col-sm-2 col-form-label">Director</label>
                <input value="Old Director" type="director" class="form-control edit-movie" id="inputDirector" aria-describedby="directorHelp">
            </div>
            <div class="form-group edit-movie">
                <label for="inputReleaseDate" class="col-sm-2 col-form-label">Release Date</label>
                <input type="date" class="form-control edit-movie" >
            </div>
            <div class="form-group edit-movie">
                <label for="inputImageURL" class="col-sm-2 col-form-label">Image URL</label>
                <input class="form-control edit-movie" type="file" id="formImageFile" name="movieImage">
            </div>
            <div class="form-group edit-movie">
                <label for="inputBackgroundURL" class="col-sm-2 col-form-label">Background URL</label>
                <input class="form-control edit-movie" type="file" id="formBackgroundFile" name="movieBackgroundImage">
            </div>
            <button type="submit" class="btn btn-danger edit-movie">Edit</button>
        </form>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#my-select').select2({
            multiple: true
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#add-btn').on('click', function(){
            var html='';
            html+='<div class="actors-character" id="#actors-character">'
            html+='<div class="actor-column">'
            html+='<label for="inputActor" class="col-sm-2 col-form-label">Actor</label>'
            html+='<input value="Old Actor" class="form-control edit-movie" type="text" name="movie-actors" minlength="3" list="actor-select" placeholder="--Open this select menu--">'
            html+='<datalist name="actors-list" id="actor-select">'
            html+='<option value="andrasda"></option>'
            html+='<option value="andrew"></option>'
            html+='</datalist>'
            html+='</div>'
            html+='<div class="character-column">'
            html+='<div class="span-char">'
            html+='<label for="inputCharacter" class="col-sm-2 col-form-label" style="width: 120px">Character Name</label>'
            html+='<a id="remove-btn"><i class="fa-solid fa-x"></i></a>'
            html+='</div>';
            html+='<input value="Old Character" type="character" name="actors-character" class="form-control edit-movie" id="inputCharacter" aria-describedby="characterHelp">'
            html+='</div></div>';
            $('#ac-row').append(html);
        })
    });

    $(document).on('click', '#remove-btn', function(){
        $(this).closest('.actors-character').remove();
    });
</script>

@endsection


