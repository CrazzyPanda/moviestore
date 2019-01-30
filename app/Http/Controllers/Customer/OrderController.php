<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Order;
use App\Movie;
use App\User;
use App\Customer;


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

        $order = $user->customer->;

        return view('customer.orders.index')->with([
            'order' => $order
        ]);
    }
}
