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
            <form action="" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Username</span>
                        <input name="username" type="username" class="form-control" value="Old Username"  autocomplete="Username">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Email</span>
                        <input name="email" type="email" class="form-control" value="Old Email"  autocomplete="Email">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">DOB</span>
                        <input name="dob" type="date" class="form-control" value="Old DOB"  autocomplete="DOB">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Phone</span>
                        <input name="phone" type="phone" class="form-control" value="Old Phone"  autocomplete="Phone">
                    </div>
                    <button class="btn btn-danger save-changes">Save Changes</button>
                </div>
            </form>
        </div>
    </div>

    @include('modal.pfp')

@endsection
