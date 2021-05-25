<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index() {
        $movies = Movie::all();

        // dd($movies);

        return view('pages.home', compact('movies'));
    }


    public function show($movieid) {

        $movie = Movie::find($movieid);

        // dd($movie);

        // dd($movieid);

        return view('pages.film', compact('movie'));
    }
}