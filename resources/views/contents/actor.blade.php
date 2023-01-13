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
        {{-- loop aja udah aman --}}
        <div class="actors-list-image-info">
            <a href="" style="text-decoration: none; color:inherit;">
                <img src="{{url('/asset/keanureeves.jpeg')}}" alt="">
                <div class="actor-name-and-movie">
                    <div class="actor-name-info">
                        <p>Benedict Cumberbatch</p>
                    </div>
                    <div class="actor-movie-name">
                        <p>Spiderman No Where Home 1000</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="actors-list-image-info">
            <a href="" style="text-decoration: none; color:inherit;">
                <img src="{{url('/asset/keanureeves.jpeg')}}" alt="">
                <div class="actor-name-and-movie">
                    <div class="actor-name-info">
                        <p>Benedict Cumberbatch</p>
                    </div>
                    <div class="actor-movie-name">
                        <p>Spiderman No Where Home 1000</p>
                    </div>
                </div>
            </a>
        </div>
    </div>


    {{-- @foreach ($actors as $a)
        {{ $a->name }}
        {{ Storage::url('images/actors/'.$a->image) }}
    @endforeach --}}
@endsection
