@extends('layouts.template')

@section('title', 'Profile')

@section('content')
    {{-- Profile Page HTML --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <div class="profile">
        <div class="profile-display">
            <div class="my-profile">
                <h1 id="my">My&nbsp;</h1>
                <h1 id="profile">Profile</h1>
            </div>
            <div class="image">
                <img src="{{url('/asset/circle-user-solid.png')}}" class="image-img" height="150px" width="150px" alt="" id="image_preview_container">
                <div class="image-overlay">
                    <button type="button" class="btn change-image" data-toggle="modal" data-target="#myModal">
                        <div class="overlay-title">
                            Change Image
                        </div>
                    </button>
                </div>
            </div>
            <div class="user-name">
                {{ Auth::user()->name }}
                {{-- Name --}}
            </div>
            <div class="user-email">
                {{ Auth::user()->email }}
                {{-- blablabla@gmail.com --}}
            </div>
        </div>

        <div class="update-profile">
            <h1 id="update-profile">Update Profile</h1>
            <form action="/profile/saveChanges" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Username</span>
                        <input name="username" type="username" class="form-control" value="{{ Auth::user()->name }}"  autocomplete="Username">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Email</span>
                        <input name="email" type="email" class="form-control" value="{{ Auth::user()->email }}"  autocomplete="Email">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">DOB</span>
                        <input name="dob" type="date" class="form-control" value="{{ Auth::user()->dob }}"  autocomplete="DOB">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Phone</span>
                        <input name="phone" type="phone" class="form-control" value="{{ Auth::user()->phone }}"  autocomplete="Phone">
                    </div>
                    @if ($errors->any())
                        {{-- Error msg --}}
                        <div>
                            {{ $errors->first() }}
                        </div>
                    @endif
                    <button class="btn btn-danger save-changes">Save Changes</button>
                </div>
            </form>
        </div>
    </div>

    @include('modal.pfp')

@endsection
