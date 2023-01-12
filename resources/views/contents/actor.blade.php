@extends('layouts.template')

@section('title', 'Actors')

@section('content')
    {{-- Actor Page HTML --}}
    <div class="actors-header">
        <h3>Actors</h3>
        <form class="d-flex">
            <input class="form-control me-sm-2" type="search" placeholder="Search Actor Address">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Add Actor</button>
        </form>
    </div>
    <div class="actors-list">
        <div class="movie-detail-more">
            <a href=""><img src="{{url('/asset/keanureeves.jpeg')}}" alt=""></a>
            <div class="movie-detail-title-and-year">
                <p style="font-size:small; font-weight:bold; padding: 2px 10px 2px 10px;"><a href="" style="text-decoration: none; color: white;">The Kungfu Panda 10 blabla 11</a></p>
                <div class="movie-detail-year-and-icon">
                    <p style="font-size:x-small; font-weight:normal;"><a href="" style="text-decoration: none; color:rgb(155, 155, 155);">2021</a></p>
                    <a style="text-decoration: none; color:rgb(155, 155, 155); font-size:small;"><i class="fa-solid fa-plus" id="plus-btn" onclick="myFunction();"></i></a>
                </div>
            </div>
        </div>
    </div>

    {{-- @foreach ($actors as $a)
        {{ $a->name }}
        {{ Storage::url('images/actors/'.$a->image) }}
    @endforeach --}}
@endsection
