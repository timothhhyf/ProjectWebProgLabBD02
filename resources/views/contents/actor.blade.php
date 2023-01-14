@extends('layouts.template')

@section('title', 'Actors')

@section('content')
    {{-- Actor Page HTML --}}
    <div class="actors-header">
        <h3>Actors</h3>
        <form class="d-flex" action="" method="GET" id="searchForm">
            {{ csrf_field() }}
            <input class="form-control me-sm-2" type="search" id="searchBar" placeholder="Search Actor Address">
            @if (Auth::check() && Auth::user()->role == 'admin')
                <a href="{{ url('/actor/create') }}" class="btn btn-secondary my-2 my-sm-0">Add Actor</a>
            @endif
            <input type="submit" value="" hidden>
        </form>
    </div>
    <div class="actors-list">
        @foreach ($actors as $a)
            <div class="actors-list-image-info">
                <a href="/actor/detail/{{ $a->id }}" style="text-decoration: none; color:inherit;">
                    <img src="{{ Storage::url('images/actors/'. $a->image); }}" alt="">
                    <div class="actor-name-and-movie">
                        <div class="actor-name-info">
                            <p>{{ $a->name }}</p>
                        </div>
                        <div class="actor-movie-name">
                            <p>{{ $a->movies()->first()->title }}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

    <script>
        var inputField = document.getElementById("searchBar");
        var form = document.getElementById("searchForm");

        inputField.addEventListener("keyup", function(event) {
            if (event.keyCode === 13) {
                event.preventDefault();
                form.action = '/actor/search=' + inputField.value;
                form.submit();
            }
        });
    </script>
@endsection
