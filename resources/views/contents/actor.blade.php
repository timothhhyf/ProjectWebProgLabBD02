@extends('layouts.template')

@section('title', 'Actors')

@section('content')
    {{-- Actor Page HTML --}}
    <div class="actors-header">
        <h3>Actors</h3>
        <form class="d-flex">
            <input class="form-control me-sm-2" type="search" placeholder="Search Actor Address">
            @if (Auth::check() && Auth::user()->role == 'admin')
                {{-- <button class="btn btn-secondary my-2 my-sm-0" type="submit">
                    Add Actor
                </button> --}}
                <a href="{{ url('/actor/create') }}" class="btn btn-secondary my-2 my-sm-0">Add Actor</a>
            @endif
        </form>
    </div>
    <div class="actors-list">
        @foreach ($actors as $a)
            <div class="actors-list-image-info">
                <a href="/actor/detail/{{ $a->id }}" style="text-decoration: none; color:inherit;">
                    <img src="{{ Storage::url('images/actors/'. $a->image); }}" alt="">
                    <div class="actor-name-and-movie">
                        <div class="actor-name-info">
                            <p>{{ $a->name }}</p>
                        </div>
                        <div class="actor-movie-name">
                            <p>{{ $a->movies()->first()->title }}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
