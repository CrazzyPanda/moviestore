<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Genre;
use App\Movie;
use App\Image;
use App\Review;
use App\Http\Controllers\Controller;
use Storage;

class ReviewController extends Controller
{
    public function index($id)
    {
        $movie = Movie::findOrFail($id);
        $reviews = $movie->reviews;

        return view('admin.reviews.index')->with([
            'movie' => $movie,
            'reviews' => $reviews
        ]);
    }
}
