<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MovieController extends Controller
{
    public function index() {
        $movies = Movie::all();

        // return view("movie"), [
        //     "movies" => "$movies"
        // ];

        return view("home", compact("movies"));
    }

    public function movieDetail($id) {
        $movie = Movie::find($id);
        return view('details', compact('movie'));
    }
}
