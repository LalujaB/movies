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
        $movie = Movie::find($id);
        return view('singlemovie', compact('movie'));
    }

}
