@extends('layouts.template')

@section('title', 'Login')

@section('content')
    {{-- Login Page HTML --}}
    <form action="/login/authLogin" method="post">
       {{ csrf_field() }}
       {{-- email field --}}
       <input type="email" name="email" id="">

       {{-- password field --}}
       <input type="password" name="password" id="">

       {{-- remember me checkbox --}}
       <input type="checkbox" name="remember" id="">

       {{-- Login btn --}}
       <input type="submit" value="Login">
    </form>
@endsection
