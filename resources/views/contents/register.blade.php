@extends('layouts.template')

@section('title', 'Register')

@section('content')
    {{-- Register Page HTML --}}
    <form action="/register/addUser" method="post">
        {{ csrf_field() }}
        {{-- username field --}}
        <input type="text" name="username" id="">

        {{-- email field --}}
        <input type="email" name="email" id="">

        {{-- password field --}}
        <input type="password" name="password" id="">

        {{-- confirm password field --}}
        <input type="password" name="password_confirmation" id="">

        {{-- register btn --}}
        <input type="submit" value="Register">
    </form>

    @if ($errors->any())
        {{$errors->first()}}
    @endif
@endsection
