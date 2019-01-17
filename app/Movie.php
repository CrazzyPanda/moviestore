<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
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
              return null;
          }
      }

      public static function topSelling() {
          return Movie::all()->random(6);
      }
}
