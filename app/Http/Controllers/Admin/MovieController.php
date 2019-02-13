<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Genre;
use App\Movie;
use App\Image;
use App\Review;
use App\Http\Controllers\Controller;
use Storage;

class MovieController extends Controller
{
    public function __construct()
     {
         $this->middleware('auth');
         $this->middleware('role:admin');
     }

    public function index()
    {
        $movies = Movie::orderBy('created_at', 'DESC')->get();

        return view('admin.movies.index')->with([
            'movies' => $movies
        ]);
    }

    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        return view('admin.movies.show')->with([
            'movie' => $movie
        ]);
    }

    public function review($id)
    {
        $review = Review::findOrFail($id);
        return view('admin.movies.review')->with([
            'review' => $review
        ]);
    }

    public function create()
    {
        $genres = Genre::all();
        return view('admin.movies.create')->with([
            'genres' => $genres
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'price' => 'required|numeric|between:0,99',
            'summary' => 'required|max:255',
            'releaseDate' => 'required|max:50',
            'mainCast' => 'required',
            'directors' => 'required|max:100',
            'region' => 'required|max:100',
            'runTime' => 'required|max:50',
            'type' => 'required|max:50',
            'language' => 'required|max:100',
            'producers' => 'required|max:100',
            'writers' => 'required|max:100',
            'cover' => 'required|file|image',
            'genre_id' => 'required|exists:genres,id'

        ]);

        $cover = $request->file('cover');
        $extension = $cover->getClientOriginalExtension();
        $filename = $request->input('name') . '-' . date('Y-m-d-His') . '.' . $extension;
        $path = $cover->storeAs('cover', $filename, 'public');

        $i = new Image();
        $i->path = $path;
        $i->save();

        $m = new Movie();
        $m->name = $request->input('name');
        $m->price = $request->input('price');
        $m->summary = $request->input('summary');
        $m->releaseDate = $request->input('releaseDate');
        $m->mainCast = $request->input('mainCast');
        $m->directors = $request->input('directors');
        $m->region = $request->input('region');
        $m->runTime = $request->input('runTime');
        $m->type = $request->input('type');
        $m->language = $request->input('language');
        $m->producers = $request->input('producers');
        $m->writers = $request->input('writers');
        $m->genre_id = $request->input('genre_id');
        $m->image_id = $i->id;

        $m->save();

        return redirect()->route('admin.movies.index');
    }

    public function edit($id)
    {
        $movie = Movie::findOrFail($id);
        $genres = Genre::all();

        return view('admin.movies.edit')->with([
            'movie' => $movie,
            'genres' => $genres
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:50',
            'price' => 'required|numeric|between:0,99',
            'summary' => 'required|max:255',
            'releaseDate' => 'required|max:50',
            'mainCast' => 'required',
            'directors' => 'required|max:100',
            'region' => 'required|max:100',
            'runTime' => 'required|max:50',
            'type' => 'required|max:50',
            'language' => 'required|max:100',
            'producers' => 'required|max:100',
            'writers' => 'required|max:100',
            'cover' => 'nullable|file|image',
            'genre_id' => 'required|exists:genres,id'
        ]);

        $m = Movie::findOrFail($id);
        if ($request->hasfile('cover')) {
            $oldImage = $m->image;

            $cover = $request->file('cover');
            $extension = $cover->getClientOriginalExtension();
            $filename = $request->input('name') . '-' . date('Y-m-d-His') . '.' . $extension;
            $path = $cover->storeAs('cover', $filename, 'public');

            $i = new Image();
            $i->path = $path;
            $i->save();

            $m->image_id = $i->id;
            $m->save();

            if ($oldImage->movies->count() == 0) {
                Storage::disk('public')->delete($oldImage->path);
                $oldImage->delete();
            }
        }
        $m->name = $request->input('name');
        $m->price = $request->input('price');
        $m->summary = $request->input('summary');
        $m->releaseDate = $request->input('releaseDate');
        $m->mainCast = $request->input('mainCast');
        $m->directors = $request->input('directors');
        $m->region = $request->input('region');
        $m->runTime = $request->input('runTime');
        $m->type = $request->input('type');
        $m->language = $request->input('language');
        $m->producers = $request->input('producers');
        $m->writers = $request->input('writers');
        $m->genre_id = $request->input('genre_id');

        $m->save();

        return redirect()->route('admin.movies.index');
    }

    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);

        $image = $movie->image;

        $movie->delete();

        if ($image->movies->count() == 0) {
            Storage::disk('public')->delete($image->path);
            $image->delete();
        }

        return redirect()->route('admin.movies.index');
    }



}
