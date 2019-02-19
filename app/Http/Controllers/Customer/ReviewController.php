<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Genre;
use App\Movie;
use App\Review;
use App\Http\Controllers\Controller;
use Storage;

class ReviewController extends Controller
{
    public function __construct()
     {
         $this->middleware('auth');
         $this->middleware('role:customer');
     }

    public function create()
    {
        return view('customer.reviews.create');
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'title' => 'required|max:50',
    //         'text' => 'nullable|numeric'
    //     ]);
    //
    //     $r = new Review();
    //     $r->title = $request->input('title');
    //     $r->text = $request->input('text');
    //
    //     $r->save();
    //
    //     return redirect()->route('movies.show');
    // }
}
