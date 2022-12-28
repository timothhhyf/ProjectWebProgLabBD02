@extends('layouts.template')

@section('title', 'Profile')

@section('content')
    {{-- Profile Page HTML --}}

    <div class="profile">
        <div class="profile-display">
            <div class="my-profile">
                <h1 id="my">My</h1>
                <h1 id="profile">Profile</h1>
            </div>
            <div class="image">
                <img src="{{url('/asset/circle-user-solid.png')}}" class="image-img" height="250px" width="250px" alt="" id="image_preview_container">
                <div class="image-overlay">
                    <button class="btn" id="btn">
                        <div class="overlay-title">
                            Change Image
                        </div>
                    </button>
                </div>
            </div>
        </div>

        <dialog class="modal">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Modal title</h5>
                  <button type="button" class="close exit" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary">Save changes</button>
                  <button type="button" class="btn btn-secondary exit" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
        </dialog>

        <div class="update-profile">
            <form action="" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Username</span>
                        <input type="username" class="form-control" value="Old Username"  autocomplete="Username">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Email</span>
                        <input type="email" class="form-control" value="Old Email"  autocomplete="Email">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">DOB</span>
                        <input type="date" class="form-control" value="Old DOB"  autocomplete="DOB">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Phone</span>
                        <input type="phone" class="form-control" value="Old Phone"  autocomplete="Phone">
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
