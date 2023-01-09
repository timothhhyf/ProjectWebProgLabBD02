@extends('layouts.template')

@section('title', 'Add Movie')

@section('content')
    <form action="" method="POST">
        {{ csrf_token() }}
        <label for="title">Title</label>
        <input type="text" name="title" id="">

    <div class="create-movie-content">
        <div class="header-text-create">
            <h3>Add Movie</h3>
        </div>
        <div class="create-movie-form">
            <form action="" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group create-movie">
                    <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
                    <input type="title" name="title" class="form-control create-movie" id="inputTitle" aria-describedby="titleHelp">
                </div>
                <div class="form-group create-movie">
                    <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
                    <textarea name="description" class="form-control create-movie" id="descTextArea" rows="6"></textarea>
                </div>
                <div class="form-group create-movie">
                    <label for="inputGenre" class="col-sm-2 col-form-label">Genre</label>
                    <select class="form-select create-movie" id="my-select" name="genre[]" multiple>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                </div>
                <div class="form-group create-movie">
                    <label for="inputActors" class="col-sm-2 col-form-label">Actors</label>
                    <div id="ac-row">
                        <div class="actors-character" id="#actors-character">
                            <div class="actor-column">
                                <label for="inputActor" class="col-sm-2 col-form-label">Actor</label>
                                <input class="form-control create-movie" type="text" name="actor" minlength="3" list="actor-select" placeholder="--Open this select menu--">
                                <datalist name="actors-list" id="actor-select">
                                    <option value="andrasda"></option>
                                    <option value="andrew"></option>
                                </datalist>
                            </div>
                            <div class="character-column">
                                <label for="inputCharacter" class="col-sm-2 col-form-label" style="width: 120px">Character Name</label>
                                <input type="character" name="charName" class="form-control create-movie" id="inputCharacter" aria-describedby="characterHelp">
                            </div>
                        </div>
                    </div>
                    <div id="ac-row">
                        <div class="actors-character" id="#actors-character">
                            <div class="actor-column">
                                <label for="inputActor" class="col-sm-2 col-form-label">Actor</label>
                                <input class="form-control create-movie" type="text" name="actor" minlength="3" list="actor-select" placeholder="--Open this select menu--">
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
                                <input type="character" name="charName" class="form-control create-movie" id="inputCharacter" aria-describedby="characterHelp">
                            </div>
                        </div>
                    </div>
                    <div class="add-more-button">
                        <a class="btn btn-info add-more" id="add-btn">Add more</a>
                    </div>
                </div>
                <div class="form-group create-movie">
                    <label for="inputDirector" class="col-sm-2 col-form-label">Director</label>
                    <input type="director" name="director" class="form-control create-movie" id="inputDirector" aria-describedby="directorHelp">
                </div>
                <div class="form-group create-movie">
                    <label for="inputReleaseDate" class="col-sm-2 col-form-label">Release Date</label>
                    <input type="date" name="releaseDate" class="form-control create-movie" >
                </div>
                <div class="form-group create-movie">
                    <label for="inputImageURL" class="col-sm-2 col-form-label">Image URL</label>
                    <input class="form-control create-movie" type="file" id="formImageFile" name="movieImage">
                </div>
                <div class="form-group create-movie">
                    <label for="inputBackgroundURL" class="col-sm-2 col-form-label">Background URL</label>
                    <input class="form-control create-movie" type="file" id="formBackgroundFile" name="movieBackgroundImage">
                </div>
                <button type="submit" class="btn btn-danger create-movie">Create</button>
            </form>
        </div>
    </div>

        <label for="genre">Genre</label>
        {{-- dropdown genre --}}

    <script type="text/javascript">
        $(document).ready(function(){
            $('#add-btn').on('click', function(){
                var html='';
                html+='<div class="actors-character" id="#actors-character">'
                html+='<div class="actor-column">'
                html+='<label for="inputActor" class="col-sm-2 col-form-label">Actor</label>'
                html+='<input class="form-control create-movie" type="text" name="actor" minlength="3" list="actor-select" placeholder="--Open this select menu--">'
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
                html+='<input type="character" name="charName" class="form-control create-movie" id="inputCharacter" aria-describedby="characterHelp">'
                html+='</div></div>';
                $('#ac-row').append(html);
            })
        });

        <label for="director">Director</label>
        <input type="text" name="director" id="">

        <label for="releaseDate">Release Date</label>
        <input type="datetime" name="releaseDate" id="">

        <label for="thumbnail">Image URL</label>
        <input type="file" name="thumbnail" id="">

        <label for="background">Background</label>
        <input type="file" name="background" id="">

        <button type="submit">Create</button>
    </form>
@endsection


