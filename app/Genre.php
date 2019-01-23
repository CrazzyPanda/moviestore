<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    //a genre has many movies
    public  function movies()
    {
      return $this->hasMany('App\Movie');
    }

    public static function allGenres() {
        return Genre::all();
    }
}
