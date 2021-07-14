<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Movie
{
    public function index() {
        $title = "I nostri libri";
        $movies = Movie::all();
        dump($movies);
        return view('welcome', compact('title', 'movies'));
    }
}
