<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Order;
use App\Movie;
use App\Customer;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }

    public function index()
    {
        $users = Role::where('name', 'customer')->first()->users;

        return view('admin.users.index')->with([
            'users' => $users
        ]);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.show')->with([
            'user' => $user
        ]);

        // $order = Order::findOrFail($id);
        // return view('admin.users.show')->with(['order' => $order]);
    }
}
