@extends('layouts.template')

@section('title', 'Watchlist')

@section('content')
    {{-- Watchlist Page HTML --}}
    @foreach ($movies as $m)
        {{ Storage::url('images/movies/thumbnail/'.$m->image) }}
        {{ $m->title }}
        {{ $m->pivot->status }}
    @endforeach
@endsection
