<?php

use Illuminate\Database\Seeder;
use App\Genre;
use App\Movie;
use App\Image;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $image = Image::where('path', 'covers/default.png')->first();

        $movie = new Movie();
        $movie->name = "Fantastic Beasts";
        $movie->price = 12.99;
        $movie->summary = "movie summary";
        $movie->releaseDate = "2001-01-01";
        $movie->mainCast = "cast 1, cast 2, cast 3";
        $movie->directors = "director 1, director 2";
        $movie->region = "Ireland";
        $movie->runTime = "02:50";
        $movie->type = "DVD";
        $movie->language = "English";
        $movie->producers = "producers 1, producers 2";
        $movie->writers = "writers";
        $movie->genre_id = Genre::where('name', 'Fantasy')->first()->id;
        $movie->image_id = $image->id;
        $movie->save();

        $movie = new Movie();
        $movie->name = "Avengers Infinity War";
        $movie->price = 12.99;
        $movie->summary = "movie summary";
        $movie->releaseDate = "2002-02-02";
        $movie->mainCast = "cast 1, cast 2, cast 3";
        $movie->directors = "director 1, director 2";
        $movie->region = "Ireland";
        $movie->runTime = "02:50";
        $movie->type = "DVD";
        $movie->language = "English";
        $movie->producers = "producers 1, producers 2";
        $movie->writers = "writers";
        $movie->genre_id = Genre::where('name', 'Action')->first()->id;
        $movie->image_id = $image->id;
        $movie->save();

        $movie = new Movie();
        $movie->name = "Deadpool 2";
        $movie->price = 12.99;
        $movie->summary = "movie summary";
        $movie->releaseDate = "2003-03-03";
        $movie->mainCast = "cast 1, cast 2, cast 3";
        $movie->directors = "director 1, director 2";
        $movie->region = "Ireland";
        $movie->runTime = "02:50";
        $movie->type = "DVD";
        $movie->language = "English";
        $movie->producers = "producers 1, producers 2";
        $movie->writers = "writers";
        $movie->genre_id = Genre::where('name', 'Comedy')->first()->id;
        $movie->image_id = $image->id;
        $movie->save();

        $movie = new Movie();
        $movie->name = "Coco";
        $movie->price = 12.99;
        $movie->summary = "movie summary";
        $movie->releaseDate = "2001-01-01";
        $movie->mainCast = "cast 1, cast 2, cast 3";
        $movie->directors = "director 1, director 2";
        $movie->region = "Ireland";
        $movie->runTime = "02:50";
        $movie->type = "DVD";
        $movie->language = "English";
        $movie->producers = "producers 1, producers 2";
        $movie->writers = "writers";
        $movie->genre_id = Genre::where('name', 'Animation')->first()->id;
        $movie->image_id = $image->id;
        $movie->save();

        $movie = new Movie();
        $movie->name = "The Greatest Showman";
        $movie->price = 12.99;
        $movie->summary = "movie summary";
        $movie->releaseDate = "2002-02-02";
        $movie->mainCast = "cast 1, cast 2, cast 3";
        $movie->directors = "director 1, director 2";
        $movie->region = "Ireland";
        $movie->runTime = "02:50";
        $movie->type = "DVD";
        $movie->language = "English";
        $movie->producers = "producers 1, producers 2";
        $movie->writers = "writers";
        $movie->genre_id = Genre::where('name', 'Musical')->first()->id;
        $movie->image_id = $image->id;
        $movie->save();

        $movie = new Movie();
        $movie->name = "Ocean's 8";
        $movie->price = 12.99;
        $movie->summary = "movie summary";
        $movie->releaseDate = "2003-03-03";
        $movie->mainCast = "cast 1, cast 2, cast 3";
        $movie->directors = "director 1, director 2";
        $movie->region = "Ireland";
        $movie->runTime = "02:50";
        $movie->type = "DVD";
        $movie->language = "English";
        $movie->producers = "producers 1, producers 2";
        $movie->writers = "writers";
        $movie->genre_id = Genre::where('name', 'Comedy')->first()->id;
        $movie->image_id = $image->id;
        $movie->save();
    }
}
