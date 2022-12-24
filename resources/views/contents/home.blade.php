@extends('layouts.template')

@section('title', 'Home Page')

@section('content')
    {{-- Home Page HTML --}}

    {{-- @if (Auth::user()->role == 'user') --}}
        {{-- Kalo login user --}}
    {{-- @endif --}}

    {{-- @if (Auth::user()->role == 'admin') --}}
        {{-- Kalo login admin --}}
    {{-- @endif --}}

@endsection
