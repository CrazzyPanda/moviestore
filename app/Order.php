<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  //an order can have many movies
      public function movies()
      {
        return $this->belongsToMany('App\Movie')->withPivot('quantity');
      }

      public function customer()
      {
        return $this->belongsTo('App\Customer');
      }

      public function totalCost() {
          $total = 0.0;
          foreach ($this->movies as $movie) {
              $total += $movie->price * $movie->pivot->quantity;
          }
          return $total;
      }
}
