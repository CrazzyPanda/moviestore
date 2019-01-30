<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use App\Movie;
use App\Review;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        $reviews = Review::all();

        return view('movies.index')->with([
            'movies' => $movies,
            'reviews' => $reviews

        ]);
    }

    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        $review = Review::findOrFail($id);
        return view('movies.show')->with([
            'movie' => $movie,
            'review' => $review
        ]);
    }
}
//regex:/^\d*(\.\d{6,2})?$/
