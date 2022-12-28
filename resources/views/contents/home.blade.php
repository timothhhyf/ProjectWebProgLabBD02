@extends('layouts.template')

@section('title', 'Home Page')

@section('content')
    {{-- Home Page HTML --}}

    {{-- @if (Auth::check() && Auth::user()->role == 'user') --}}
        {{-- Kalo login user --}}
    {{-- @endif --}}

    {{-- @if (Auth::check() && Auth::user()->role == 'admin') --}}
        {{-- Kalo login admin --}}
    {{-- @endif --}}

    {{-- Carousel, yang geser2 itu --}}
    @foreach ($heroMovies as $hm)
        {{ Storage::url('images/movies/background/'.$hm->background_img); }}
        {{ $hm->title }}
        {{ $hm->description }}
        {{ date('Y', strtotime($hm->release_date)) }}
        @foreach ($hm->genres() as $g)
            {{ $g->name }}
        @endforeach
    @endforeach --}}

    {{-- Show movies --}}
    @foreach ($allMovies as $am)
        {{ Storage::url('images/movies/thumbnail/'.$am->image); }}
        {{ $am->title }}
        {{ date('Y', strtotime($am->release_date)) }}
    @endforeach
@endsection
