<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  //a customer can make many reviews
  public function reviews()
  {
    return $this->hasMany('App\Review');
  }

  public function orders()
  {
    return $this->hasMany('App\Order');
  }

  public function user()
  {
    return $this->belongsTo('App\User');
  }
}
