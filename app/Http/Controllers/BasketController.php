<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Movie;
use App\Basket;
use App\Order;
use App\Customer;
use App\User;
use App\Http\Controllers\Controller;
use Validator;

class BasketController extends Controller
{
    public function view(Request $request)
    {
        $basket = $this->getBasket($request);

        return view('basket.view')->with([
            'basket' => $basket
        ]);
    }

    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'movie_id' => 'required|integer|exists:movies,id',
        ]);

        if ($validator->fails()) {
            $request->session()->flash('alert-error', 'Invalid request');
            return redirect()->back();
        }
        else {
            $movie_id = $request->input('movie_id');
            $movie = Movie::find($movie_id);

            $basket = $this->getBasket($request);//
            $basket->add($movie, 1);//

            $request->session()->flash('alert-success', $movie->name . ' was added to your basket!');

            return redirect()->back();
        }
    }

    public function edit(Request $request)
    {
        $basket = $this->getBasket($request);

        return view('basket.edit')->with([
            'basket' => $basket
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'quantity' => 'required|array',
            'quantity.*' => 'integer|min:0'
        ]);

        $basket = $this->getBasket($request);
        $quantities = $request->input('quantity');
        foreach ($quantities as $movie_id => $quantity) {
            $movie = Movie::findOrFail($movie_id);
            $basket->update($movie, $quantity);
        }

        $request->session()->flash('alert-success', 'Your basket was updated!');
        return redirect()->route('basket.view');
    }

    public function checkout(Request $request)
    {
        $user = Auth::user();
        $customer = $user->customer;
        if ($customer == null) {
            $request->session()->flash('alert-warning', 'You need to login or register before you can checkout');
            return redirect()->route('login');
        }

        $basket = $this->getBasket($request);

        return view('basket.checkout')->with([
            'basket' => $basket,
            'customer' => $customer
            // 'user' => $user
        ]);
    }

    public function pay(Request $request) {
        // $request->validate([
        //     'credit_card_id' => 'required|integer|min:0'
        // ]);

        $user = Auth::user();
        $customer = $user->customer;

        // $credit_card_id = $request->input('credit_card_id');
        // if ($credit_card_id == 0) {
        //     $request->validate([
        //         'name' => 'nullable|string|max:100',
        //         'number' => 'nullable|digits:16',
        //         'expiry' => 'nullable|regex:/[0-9]{2}\/[0-9]{2}/',
        //         'cvv' => 'nullable|digits:3'
        //     ]);
        //
        //     $card = new CreditCard();
        //     $card->name = $request->input('name');
        //     $card->number = $request->input('number');
        //     $card->expiry = $request->input('expiry');
        //     $card->cvv = $request->input('cvv');
        //     $card->customer_id = $customer->id;
        //     $card->save();
        // }
        // else {
        //     $card = CreditCard::findOrFail($credit_card_id);
        //     if ($card->customer_id != $customer->id) {
        //         return response(401, 'Unauthorised');
        //     }
        // }

        $order = new Order();
        $order->date = date('Y-m-d');
        $order->customer_id = $customer->id;
        $order->save();

        $basket = $this->getBasket($request);
        foreach ($basket->getItems() as $item) {
            $order->movies()->attach($item->getMovie()->id, [
                'quantity' => $item->getQuantity()]
            );
        }

        $basket->removeAll();

        $request->session()->flash('alert-success', 'Your order and payment have been received!');
        return redirect()->route('customer.orders.show', $order);
    }

    private function getBasket(Request $request) {
        $basket = $request->session()->get('basket', null);//
        if ($basket == null) {//
            $basket = new ShoppingBasket();//
            $request->session()->put('basket', $basket);//
        }
        return $basket;//
    }
 }
