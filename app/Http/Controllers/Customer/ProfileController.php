<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Customer;


class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:customer');
    }

    public function index()
    {
        $user = Auth::user();
        $customer = $user->customer;
        
        return view('customer.profiles.index')->with([
            'customer' => $customer
        ]);
    }
}
