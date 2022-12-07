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
            <form action="{{url('/login/authLogin')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Email</span>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Password</span>
                        <input type="password" class="form-control" id="exampleInputPassword1" aria-describedby="passwordHelp" placeholder="Enter your password">
                    </div>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault"> Remember me </label>
                </div>
                <button type="button" class="btn btn-danger">Login &#x279C;</button>
                <div class="under-btn-text">
                    <p>Don't have an account?&nbsp;</p>
                    <p><a class="register-now" href="">Register now!</a></p>
                </div>
            </form>
        </div>
    </div>
@endsection
