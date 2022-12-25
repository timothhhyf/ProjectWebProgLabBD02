@extends('layouts.template')

@section('title', $actor->name)

@section('content')
    {{-- Actor Detail Page HTML --}}
    {{ $actor->name }}
    {{ $actor->gender }}
    {{ $actor->dob }}
    {{ $actor->pob }}
    {{ $actor->biography }}
@endsection
