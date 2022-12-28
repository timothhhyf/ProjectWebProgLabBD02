@extends('layouts.template')

@section('title', 'Actors')

@section('content')
    {{-- Actor Page HTML --}}
    @foreach ($actors as $a)
        {{ $a->name }}
        {{ Storage::url('images/actors/'.$a->image) }}
    @endforeach
@endsection
