@extends('layouts.template')

@section('title', 'Create Movie')

@section('content')
    {{-- Create Movie Page HTML --}}

    <div class="create-movie-content">
        <div class="header-text-create">
            <h3>Add Movie</h3>
        </div>
        <div class="create-movie-form">
            <form action="" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group create-movie">
                    <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
                    <input type="title" class="form-control create-movie" id="inputTitle" aria-describedby="titleHelp">
                </div>
                <div class="form-group create-movie">
                    <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
                    <textarea class="form-control create-movie" id="descTextArea" rows="6"></textarea>
                </div>
                <div class="form-group create-movie">
                    <label for="inputGenre" class="col-sm-2 col-form-label">Genre</label>
                    <select class="form-select create-movie" id="my-select" name="my-select[]" multiple>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                </div>
                <div class="form-group create-movie actor-input">
                    <label for="inputActors" class="col-sm-2 col-form-label">Actors</label>
                    <div class="actors-character">
                        <div class="actor-column">
                            <label for="inputActor" class="col-sm-2 col-form-label">Actor</label>
                            <input class="form-control create-movie" type="text" name="actor" minlength="3" list="actor-select">
                            <datalist name="actor" id="actor-select">
                                <option value="andrasda"></option>
                                <option value="andrew"></option>
                            </datalist>
                        </div>
                        <div class="character-column">
                            <label for="inputCharacter" class="col-sm-2 col-form-label">Character</label>
                            <input type="character" class="form-control create-movie" id="inputCharacter" aria-describedby="characterHelp">
                        </div>
                    </div>
                </div>
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
{{--
    <script>
        $(document).ready(function(){
            $('#my-select').select2({
                multiple: true
            });
        });
    </script> --}}
@endsection


