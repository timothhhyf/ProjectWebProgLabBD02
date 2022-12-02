@extends('layouts.template')

@section('title', 'Profile')

@section('content')
    {{-- Profile Page HTML --}}

    <form action="" method="POST">
        {{-- username field --}}
        <input type="text" name="username" id="">

        {{-- email field --}}
        <input type="email" name="email" id="">

        {{-- dob field --}}
        <input type="date" name="dob" id="">

        {{-- phone number field --}}
        <input type="text" name="phone" id="">
    </form>
@endsection
