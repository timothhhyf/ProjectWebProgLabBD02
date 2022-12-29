@extends('layouts.template')

@section('title', $actor->name)

@section('content')
    {{-- Actor Detail Page HTML --}}
    {{ $actor->name }}
    {{ $actor->image }}
    {{ $actor->gender }}
    {{ $actor->dob }}
    {{ $actor->pob }}
    {{ $actor->biography }}
    @foreach ($actor->movies() as $m)
        {{ Storage::url('images/movies/thumbnail/'.$m->image) }}
        {{ $m->title }}
    @endforeach
@endsection
