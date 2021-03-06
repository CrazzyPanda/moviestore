<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public static function inCollection($movie, $movieCollection) {
        if ($movieCollection->first(function($m) use ($movie) { return $m->id == $movie->id; }) == null) {
            return false;
        }
        else {
            return true;
        }
    }

    //a movie can have many orders
    public function orders()
    {
        return $this->belongsToMany('App\Order')->withPivot('quantity');

    }
    //a genre has many movies (1:M inverse)
    public function genre()
    {
      return $this->belongsTo('App\Genre');
    }

    public function image()
    {
        return $this->belongsTo('App\Image');
    }

    //a movie can have many reviews
    public  function reviews()
    {
      return $this->hasMany('App\Review');
    }

    public function starRating() {
        if ($this->reviews->count() > 0) {
            $sum = 0;
            foreach ($this->reviews as $review) {
                $sum += $review->starRating;
            }
            return $sum / $this->reviews->count();
        }
        else {
            return 3;
        }
    }

    public static function topSelling()
    {
        return Movie::all()->random(8);
    }

    public static function newRelease()
    {
        //returns 12 movies starting from index 0 in descending order
        return Movie::all()->sortByDesc('id')->splice(0, 12);
    }
}
