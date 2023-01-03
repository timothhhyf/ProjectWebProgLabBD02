@extends('layouts.template')

@section('title', 'Create Actor')

@section('content')
    <form action="" method="POST" enctype="multipart/form-data">
        {{ csrf_token() }}
        <label for="name">Name</label>
        <input type="text" name="name" id="">

        <label for="gender">Gender</label>
        {{-- dropdown gender --}}

        <label for="biography">Biography</label>
        <textarea name="biography" id="" cols="30" rows="10"></textarea>

        <label for="dob">Date of Birth</label>
        <input type="datetime" name="dob" id="">

        <label for="pob">Place of Birth</label>
        <input type="text" name="pob" id="">

        <label for="image">Image URL</label>
        <input type="file" name="image" id="">

        <label for="popularity">Popularity</label>
        <input type="number" name="popularity" id="">

        <button type="submit">Create</button>
    </form>
@endsection



