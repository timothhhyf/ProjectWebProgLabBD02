@extends('layouts.template')

@section('title', 'Register')

@section('content')
    {{-- Register Page HTML --}}
    <div class="header-text">
        <h3>Hello, Welcome to</h3>
        <img src="{{url('/asset/MovieListLogo.png')}}" alt="Image" style="width:100px; height:30px;">
    </div>

    <div class="home-form">
        <div class="form-group-row register">
            <form action="{{url('/register/addUser')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="input-group mb-3 register">
                        <span class="input-group-text">Username</span>
                        <input type="username" class="form-control" id="exampleInputUsername1" aria-describedby="usernameHelp" placeholder="Enter your username">
                    </div>
                    <div class="input-group mb-3 register">
                        <span class="input-group-text">Email</span>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
                    </div>
                    <div class="input-group mb-3 register">
                        <span class="input-group-text">Password</span>
                        <input type="password" class="form-control" id="exampleInputPassword1" aria-describedby="passwordHelp" placeholder="Enter your password">
                    </div>
                    <div class="input-group mb-3 register">
                        <span class="input-group-text">Confirm Password</span>
                        <input type="password" class="form-control" id="exampleInputConfirmPassword1" aria-describedby="confirmPasswordHelp" placeholder="Enter your confirm password">
                    </div>
                </div>
                <button type="button" class="btn btn-danger register">Register &#x279C;</button>
                <div class="under-btn-text">
                    <p>Already have an account?&nbsp;</p>
                    <p><a class="login-now" href="{{url('/login')}}">Login now!</a></p>
                </div>
            </form>
        </div>
    </div>

    @if ($errors->any())
        {{$errors->first()}}
    @endif
@endsection
