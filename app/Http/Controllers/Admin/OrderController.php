<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Order;
use App\Movie;
use App\User;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        $users = User::all();
        $movies = Movie::all();

        return view('admin.home')->with([
            'orders' => $orders,
            'users' => $users,
            'movies' => $movies
        ]);


    }


}
