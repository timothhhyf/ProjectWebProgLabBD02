@extends('layouts.template')

@section('title', $actor->name)

@section('content')
    {{-- Actor Detail Page HTML --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <div class="actor-detail-page">
        <div class="actor-detail-img-and-personal-info">
            <img src="{{ Storage::url('images/actors/'. $actor->image); }}" alt="">
            <div class="personal-info">
                <h4>Personal Info</h4>
                <h6>Popularity</h6>
                {{-- <p>34.79</p> --}}
                <p>{{ number_format($actor->popularity) }}</p>
                <h6>Gender</h6>
                {{-- <p>Male</p> --}}
                <p>{{ $actor->gender }}</p>
                <h6>Birthday</h6>
                {{-- <p>1970-07-19</p> --}}
                <p>{{ $actor->dob }}</p>
                <h6>Place of Birth</h6>
                {{-- <p>London, England, UK</p> --}}
                <p>{{ $actor->pob }}</p>
            </div>
        </div>
        <div class="actor-name-bio-known-for">
            {{-- <h1>Benedict Cumberbatch</h1> --}}
            <h1>{{ $actor->name }}</h1>
            <div class="actor-detail-biography">
                <h4>Biography</h4>
                {{-- <p>Benedict Timothy Carlton Cumberbatch CBE (born 19 July 1976) is an English actor. Known for his work on screen and stage, he has received various accolades, including a British Academy Television Award, a Primetime Emmy Award and a Laurence Olivier Award. He has also been nominated for two Academy Awards, two British Academy Film Awards and four Golden Globe Awards. In 2014, Time magazine named him one of the 100 most influential people in the world, and in 2015, he was appointed a CBE at Buckingham Palace for services to the performing arts and to charity. Cumberbatch studied drama at the Victoria University of Manchester and obtained a Master of Arts in classical acting at the London Academy of Music and Dramatic Art. He began acting in Shakespearean theatre productions before making his West End debut in Richard Eyre's revival of Hedda Gabler in 2005. Since then, he has starred in Royal National Theatre productions of After the Dance (2010) and Frankenstein (2011), winning the Laurence Olivier Award for Best Actor for the latter. In 2015, he played the title role in Hamlet at the Barbican Theatre.</p> --}}
                <p>{{ $actor->biography }}</p>
            </div>
            <div class="actor-detail-known-for">
                <h4>Known for</h4>
                <div class="actor-movies-list">
                    {{-- loop aja udh aman --}}
                    @foreach ($actor->movies()->get() as $m)
                        <div class="movie-list-image-info">
                            <a href="" style="text-decoration: none; color:white;">
                            <img src="{{ Storage::url('images/movies/thumbnail/'. $m->image); }}" alt="">
                            <div class="actor-movie-title">
                                <p>{{ $m->title }}</p>
                            </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
