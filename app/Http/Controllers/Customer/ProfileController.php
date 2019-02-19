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

    public function show()
    {
        $user = Auth::user();
        $customer = $user->customer;

        return view('customer.profile.show')->with([
            'customer' => $customer
        ]);
    }

    public function edit()
    {
        $user = Auth::user();
        $customer = $user->customer;

        return view('customer.profile.edit')->with([
            'customer' => $customer
        ]);
    }

    public function update(Request $request)
    {
        $u = Auth::user();
        $c = $u->customer;

        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email|unique:users,email,' . $u->id,
            'addressLine1' => 'required|max:100',
            'addressLine2' => 'nullable|max:100',
            'town' => 'required|max:100',
            'county'=>'required|max:100',
            'nameOnCard' =>'required|max:100',
            'cardNumber' =>'required|max:100',
            'expiryDate' =>'required|max:100',
            'cvv' => 'required|size:3'

        ]);

        $u->name = $request->input('name');
        $u->email = $request->input('email');
        $u->save();

        $c->addressLine1 = $request->input('addressLine1');
        $c->addressLine2 = $request->input('addressLine2');
        $c->town = $request->input('town');
        $c->county = $request->input('county');
        $c->nameOnCard = $request->input('nameOnCard');
        $c->cardNumber = $request->input('cardNumber');
        $c->expiryDate = $request->input('expiryDate');
        $c->cvv = $request->input('cvv');
            $c->save();

        return redirect()->route('customer.profile.show');
    }
}
