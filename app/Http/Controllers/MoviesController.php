<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Movie
{
    public function index() {
        $movies = Movie::all();
        //dump($movies);
        return view('partials.film', compact('movies'));
    }
}
