@extends('layouts.template')

@section('title', 'Movie Detail')

@section('content')
    {{-- Movie Detail Page HTML --}}
    {{ $movie->title }}
    {{ Storage::url('images/movies/thumbnail/'.$movie->image); }}
    {{ Storage::url('images/movies/background/'.$movie->background_img); }}
    @foreach ($movie->genres() as $g)
        {{ $g->name }}
    @endforeach
    {{ date('Y', strtotime($movie->release_date)) }}
    {{ $movie->description }}
    {{ $movie->director }}
    @foreach ($movie->actors() as $a)
        {{ $a->name }}
        {{ $a->pivot->character }}
    @endforeach

    @foreach ($movies as $m)
        {{ Storage::url('images/movies/thumbnail/'.$m->image) }}
        {{ $m->title }}
        {{ date('Y', strtotime($m->release_date)) }}
    @endforeach
@endsection
