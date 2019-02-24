<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\Movie;
use App\User;
use App\Customer;
use App\Role;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }

    public function index()
    {
        $orders = Order::take(5)->orderBy('created_at', 'DESC')->get();
        $movies = Movie::take(5)->orderBy('created_at', 'DESC')->get();
        $users = User::take(5)->orderBy('created_at', 'DESC')->get();
        // $users = Role::where('name', 'customer')->first()->users;

        return view('admin.home')->with([
            'orders' => $orders,
            'movies' => $movies,
            'users' => $users
        ]);
    }
}
