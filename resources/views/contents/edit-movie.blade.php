@extends('layouts.template')

@section('title', 'Edit Movie')

@section('content')
    <form action="" method="POST" enctype="multipart/form-data">
        {{ csrf_token() }}
        <label for="title">Title</label>
        <input type="text" name="title" id="">

        <label for="description">Description</label>
        <input type="text" name="description" id="">

        <label for="genre">Genre</label>
        {{-- dropdown genre --}}

        <label for="actor">Actors</label>
        {{-- pilihan actor & characternya --}}

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


