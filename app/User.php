<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

//a user can have many roles
    public function roles()
    {
      return $this->belongsToMany('App\Role');
    }
//returns the role name from the Roles Table if the value is not null
    public function hasRole($role)
    {
      return $this->roles()->where('name', $role)->first() != null;
    }

    public function customer()
    {
      return $this->hasOne('App\Customer');
    }
}
