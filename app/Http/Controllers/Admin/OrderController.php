<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Order;
use App\Movie;
use App\User;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }

    // public function index()
    // {
    //     $orders = Order::all();
    //     $users = User::all();
    //     $movies = Movie::all();
    //
    //     return view('admin.home')->with([
    //         'orders' => $orders,
    //         'users' => $users,
    //         'movies' => $movies
    //     ]);
    // }

    public function index()
    {
        $orders = Order::all();

        return view('admin.orders.index')->with([
            'orders' => $orders
        ]);
    }

    public function show($id)
    {
        // $orders = Order::findOrFail($id);
        // return view('admin.orders.show')->with([
        //     'orders' => $orders
        // ]);

        $order = Order::findOrFail($id);
        return view('admin.orders.show')->with(['order' => $order]);
    }

}
