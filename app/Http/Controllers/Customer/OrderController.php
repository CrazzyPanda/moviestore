<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Order;
use App\Movie;
use App\User;
use App\Customer;
use App\Role;


class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:customer');
    }

    public function index()
    {
        $orders = Order::all();
        $user = Auth::user();

        $order = $user->customer;

        return view('customer.orders.index')->with([
            'orders' => $orders
        ]);

        // $users = Role::where('name', 'customer')->first()->users;
        //
        // return view('customer.orders.index')->with([
        //     'users' => $users
        // ]);

        // $user = User::findOrFail($id);
        // return view('customer.orders.index')->with(['user' => $user]);
    }
}
