<?php

use Illuminate\Database\Seeder;
use App\Genre;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genreArray = array(
            'Action', 'Adventure', 'Animation', 'Comedy', 'Drama',
            'Documentary', 'Fantasy', 'Family', 'Fiction', 'Historical',
            'Horror', 'Indie', 'Musical', 'Romance', 'Romantic-Comedy',
            'Sci-Fi', 'Thriller', 'War', 'Western'
        );
        foreach($genreArray as $g){
            $genre = new Genre();
            $genre->name = $g;
            $genre->save();
        }
    }
}
