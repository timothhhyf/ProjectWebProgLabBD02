@extends('layouts.template')

@section('title', 'Home Page')

@section('content')
    {{-- Home Page HTML --}}
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
    <nav class="navbar navbar-expand-lg navbar-dark" style="padding:0; height:64px; background-color: #1f1f1f;">
        <div class="container-fluid" style="display: flex; margin: 0 80px 0 80px; padding:0">
          <a class="navbar-brand" href="#">
            <img src="{{url('/asset/MovieListLogo.png')}}" alt="Image" style="width:100px; height:30px;">
          </a>
          <div class="selection-nav" style="font-size: 14px; display:flex; flex-direction:row; align-items:center;">
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
          </div>
        </div>
      </nav>
@endsection
