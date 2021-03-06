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

        return view('movies.index')->with([
            'movies' => $movies
        ]);
    }

    public function search(Request $request) {
        $request->validate([
            'terms' => 'required|max:100'
        ]);

        $terms = $request->input('terms');

        $movies = Movie::where('name', 'LIKE', '%'.$terms.'%')->get();

        return view('movies.index')->with([
            'movies' => $movies
        ]);
    }

    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        $reviews = $movie->reviews;
        return view('movies.show')->with([
            'movie' => $movie,
            'reviews' => $reviews
        ]);
    }
}
