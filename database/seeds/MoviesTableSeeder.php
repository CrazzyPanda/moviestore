<?php

use Illuminate\Database\Seeder;
use App\Genre;
use App\Movie;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movie = new Movie();
        $movie->name = "Star Wars 1";
        $movie->price = 12.99;
        $movie->summary = "Star Wars 1 summary";
        $movie->releaseDate = "2001-01-01";
        $movie->mainCast = "Joe Bloggs, Mary Bloggs";
        $movie->directors = "Fred Bloggs, Anne Bloggs";
        $movie->region = "Ireland";
        $movie->runTime = "02:50";
        $movie->type = "DVD";
        $movie->language = "English";
        $movie->producers = "Kevin Bloggs, Linda Bloggs";
        $movie->writers = "Sarah Bloggs, Pete Bloggs";
        $movie->genre_id = Genre::where('name', 'Sci-Fi')->first()->id;
        $movie->save();

        $movie = new Movie();
        $movie->name = "Star Wars 2";
        $movie->price = 12.99;
        $movie->summary = "Star Wars 2 summary";
        $movie->releaseDate = "2002-02-02";
        $movie->mainCast = "Joe Bloggs, Mary Bloggs";
        $movie->directors = "Fred Bloggs, Anne Bloggs";
        $movie->region = "Ireland";
        $movie->runTime = "02:50";
        $movie->type = "DVD";
        $movie->language = "English";
        $movie->producers = "Kevin Bloggs, Linda Bloggs";
        $movie->writers = "Sarah Bloggs, Pete Bloggs";
        $movie->genre_id = Genre::where('name', 'Sci-Fi')->first()->id;
        $movie->save();

        $movie = new Movie();
        $movie->name = "Star Wars 3";
        $movie->price = 12.99;
        $movie->summary = "Star Wars 3 summary";
        $movie->releaseDate = "2003-03-03";
        $movie->mainCast = "Joe Bloggs, Mary Bloggs";
        $movie->directors = "Fred Bloggs, Anne Bloggs";
        $movie->region = "Ireland";
        $movie->runTime = "02:50";
        $movie->type = "DVD";
        $movie->language = "English";
        $movie->producers = "Kevin Bloggs, Linda Bloggs";
        $movie->writers = "Sarah Bloggs, Pete Bloggs";
        $movie->genre_id = Genre::where('name', 'Sci-Fi')->first()->id;
        $movie->save();
    }
}
