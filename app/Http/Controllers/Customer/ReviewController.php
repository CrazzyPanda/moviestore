<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Genre;
use App\Movie;
use App\Review;
use App\Role;
use App\Http\Controllers\Controller;
use Storage;

class ReviewController extends Controller
{
    public function __construct()
     {
         $this->middleware('auth');
         $this->middleware('role:customer');
     }

    public function create($id)
    {
        $movie = Movie::findOrFail($id);

        return view('movies.reviews.create')->with([
            'movie' => $movie
        ]);
    }

    public function store(Request $request, $id)
    {
      $movie = Movie::findOrFail($id);
      $user = Auth::user();
      $customer = $user->customer;

      $request->validate([
            'starRating' => 'required|integer|min:1|max:5',
            'title' => 'required|max:50',
            'text' => 'nullable|string|max:191'
        ]);

        $r = new Review();
        $r->starRating = $request->input('starRating');
        $r->title = $request->input('title');
        $r->text = $request->input('text');
        $r->date = date("Y-m-d");
        $r->customer_id = $customer->id;
        $r->movie_id = $movie->id;

        $r->save();

        return redirect()->route('movies.show', $movie->id);
    }

    public function edit($id, $rid)
    {
        $movie = Movie::findOrFail($id);
        $review = Review::findOrFail($rid);
        $user = Auth::user();
        $customer = $user->customer;

        if ($review->customer_id != $customer->id) {
          return response('Unauthorized.', 401);
        }

        return view('movies.reviews.edit')->with([
            'movie' => $movie,
            'review' => $review
        ]);
    }

    public function update(Request $request, $id, $r_id)
    {
      $movie = Movie::findOrFail($id);
      $review = Review::findOrFail($r_id);
      $user = Auth::user();
      $customer = $user->customer;

      if ($review->customer_id != $customer->id) {
        return response('Unauthorized.', 401);
      }

      $request->validate([
            'starRating' => 'required|integer|min:1|max:5',
            'title' => 'required|max:50',
            'text' => 'nullable|string|max:191'
        ]);
        $review->starRating = $request->input('starRating');
        $review->title = $request->input('title');
        $review->text = $request->input('text');
        $review->date = date("Y-m-d");

        $review->save();

        return redirect()->route('movies.show', $movie->id);
    }

    public function delete($id, $r_id)
    {
        $movie = Movie::findOrFail($id);
        $review = Review::findOrFail($r_id);
        $user = Auth::user();
        $customer = $user->customer;

        if ($review->customer_id != $customer->id) {
          return response('Unauthorized.', 401);
        }

        $review->delete();

        return redirect()->route('movies.show', $movie->id);
    }

}
