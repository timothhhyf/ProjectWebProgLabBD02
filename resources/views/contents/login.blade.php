@extends('layouts.template')

@section('title', 'Login')

@section('content')
    {{-- Login Page HTML --}}
    <div class="header-text">
        <h3>Hello, Welcome back to</h3>
        <img src="{{url('/asset/MovieListLogo.png')}}" alt="Image" style="width:100px; height:30px;">
    </div>

    <div class="home-form">
        <div class="form-group-row">
            <form action="{{url('/login/authLogin')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Email</span>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email" value="{{Auth::check() ? Auth::user()->email : ''}}">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Password</span>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" aria-describedby="passwordHelp" placeholder="Enter your password">
                    </div>
                </div>
                @if ($errors->any())
                    {{-- Error msg --}}
                    <div>
                        {{ $errors->first() }}
                    </div>
                @endif
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="remember">
                    <label class="form-check-label" for="flexCheckDefault"> Remember me </label>
                </div>
                <button type="submit" class="btn btn-danger">Login &#x279c;</button>
                {{-- <button type="button" class="btn btn-danger">Login &#x279C;</button> --}}
                <div class="under-btn-text">
                    <p>Don't have an account?&nbsp;</p>
                    <p><a class="register-now" href="{{url('/register')}}">Register now!</a></p>
                </div>
            </form>
        </div>
    </div>
@endsection
