<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\Movie;
use App\User;
use App\Customer;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }

    public function index()
    {
        $orders = Order::all();
        $movies = Movie::all();
        $users = User::all();

        return view('admin.home')->with([
            'orders' => $orders,
            'movies' => $movies,
            'users' => $users
        ]);
    }
}
