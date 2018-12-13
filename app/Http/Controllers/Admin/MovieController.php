<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Movie;
use App\Http\Controllers\Controller;

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

        return view('admin.home')->with([
            'movies' => $movies
        ]);
    }


}
