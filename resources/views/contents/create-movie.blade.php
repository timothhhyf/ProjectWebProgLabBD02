@extends('layouts.template')

@section('title', 'Create Movie')

@section('content')
    {{-- Create Movie Page HTML --}}

    <div class="create-movie-content">
        <div class="header-text-create">
            <h3>Add Movie</h3>
        </div>
        <div class="create-movie-form">
            <form action="" method="post">
                {{ csrf_field() }}
                <div class="form-group create-movie">
                    <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
                    <input type="title" class="form-control create-movie" id="inputTitle" aria-describedby="titleHelp">
                </div>
                <div class="form-group create-movie">
                    <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
                    <textarea class="form-control" id="descTextArea" rows="6"></textarea>
                </div>
                <div class="form-group create-movie">
                    <label for="inputGenre" class="col-sm-2 col-form-label">Genre</label>
                    <select name="genre[]" class="form-control js-example-basic-multiple" id="genre-select" multiple="multiple">
                        <option value="">a</option>
                        <option value="">b</option>
                        <option value="">c</option>
                        <option value="">d</option>
                        <option value="">e</option>
                        <option value="">f</option>
                    </select>
                </div>

                <button type="button" class="btn btn-danger">Login &#x279C;</button>
                <div class="under-btn-text">
                    <p>Don't have an account?&nbsp;</p>
                    <p><a class="register-now" href="{{url('/register')}}">Register now!</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#genre-select').select2();
        });
    </script>
@endsection



