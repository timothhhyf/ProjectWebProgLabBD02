@extends('layouts.template')

@section('title', 'Home Page')

@section('content')
    {{-- Home Page HTML --}}
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="{{url('/asset/MovieListLogo.png')}}" alt="Image" style="width:100px; height:30px;">
          </a>
          <div class="selection-nav">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Movies</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Actors</a>
              </li>
            </ul>
            <a class="btn btn-primary" href="#" style="">
                <div style="">
                    Register
                </div>
            </a>
            <a class="btn btn-outline-primary" href="#">
                <div style="">
                    Login
                </div>
            </a>
          </div>
        </div>
    </nav>

    <div class="header">
        <h3>Hello, Welcome back to</h3>
        <img src="{{url('/asset/MovieListLogo.png')}}" alt="Image" style="width:100px; height:30px;">
    </div>

    <div class="home-form">
        <div class="form-group-row">
            <div class="form-group">
                <div class="input-group mb-3">
                    <span class="input-group-text">Email</span>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Password</span>
                    <input type="password" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp" placeholder="Enter your password">
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
        </div>
    </div>

@endsection
