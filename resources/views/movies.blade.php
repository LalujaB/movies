@extends('layouts/master')

@section('title')
    Movies
@endsection


    @include('layouts/navbar')

@section('content')

        @foreach($movies as $movie)
            <div>
                <h2><a href="movies/{{$movie->id}}">{{$movie->title}}</a></h2> <br> {{$movie->storyline}}
            </div>
            @endforeach

@endsection