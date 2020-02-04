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
        <div>
            @if(count($movie->comments))

                <div class="container">

                    <p><br><strong>Comments:</strong><br></p>

                    <ul class="list-unstiled">

                        @foreach($movie->comments as $comment)

                            <li>

                                <p>{{ $comment->content }}</p>

                                <p>{{ $comment->created_at }}</p>

                            </li>

                        @endforeach

                    </ul>

                </div>

                @endif

            </div>

@endsection