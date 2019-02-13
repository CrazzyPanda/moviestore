<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Movie;
use App\Genre;


class GenreController extends Controller
{
    public function show($id)
    {
        $genre = Genre::findOrFail($id);
        $movies = $genre->movies;

        return view('genres.show')->with([
            'movies' => $movies,
            'genre' => $genre
        ]);
    }
}
