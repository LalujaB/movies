<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index(){
        $movies = Movie::all();
        return view('movies',compact('movies'));

    }

    public function show($id) {
        $movie = Movie::with('comments')->find($id);
        \Log::info($movie);
        return view('singlemovie', compact('movie'));
    }

    public function create (){
        return view('moviescreate');
    }

    public function store (Request $reques) {
        $movie = Movie::create($reques->all());

        return redirect('/movies');

    }

}
