<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Movie;
use App\Basket;
use App\Order;
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

            $cart = $this->getBasket($request);
            $cart->add($movie, 1);

            $request->session()->flash('alert-success', $movie->title . ' was added to your basket!');
            
            return redirect()->back();
        }
    }
//
//     public function edit(Request $request)
//     {
//         $cart = $this->getCart($request);
//
//         return view('cart.edit')->with([
//             'cart' => $cart
//         ]);
//     }
//
//     public function update(Request $request)
//     {
//         $request->validate([
//             'quantity' => 'required|array',
//             'quantity.*' => 'integer|min:0'
//         ]);
//
//         $cart = $this->getCart($request);
//         $quantities = $request->input('quantity');
//         foreach ($quantities as $book_id => $quantity) {
//             $book = Book::findOrFail($book_id);
//             $cart->update($book, $quantity);
//         }
//
//         $request->session()->flash('alert-success', 'Your cart was updated!');
//         return redirect()->route('cart.view');
//     }
//
//     public function checkout(Request $request)
//     {
//         $user = Auth::user();
//         if ($user == null) {
//             $request->session()->flash('alert-warning', 'You need to login or register before you can checkout!');
//             return redirect()->route('login');
//         }
//
//         $cart = $this->getCart($request);
//
//         return view('cart.checkout')->with([
//             'cart' => $cart,
//             'user' => $user
//         ]);
//     }
//
//     public function pay(Request $request) {
//         $request->validate([
//             'credit_card_id' => 'required|integer|min:0'
//         ]);
//
//         $user = Auth::user();
//         $customer = $user->customer;
//
//         $credit_card_id = $request->input('credit_card_id');
//         if ($credit_card_id == 0) {
//             $request->validate([
//                 'name' => 'nullable|string|max:100',
//                 'number' => 'nullable|digits:16',
//                 'expiry' => 'nullable|regex:/[0-9]{2}\/[0-9]{2}/',
//                 'cvv' => 'nullable|digits:3'
//             ]);
//
//             $card = new CreditCard();
//             $card->name = $request->input('name');
//             $card->number = $request->input('number');
//             $card->expiry = $request->input('expiry');
//             $card->cvv = $request->input('cvv');
//             $card->customer_id = $customer->id;
//             $card->save();
//         }
//         else {
//             $card = CreditCard::findOrFail($credit_card_id);
//             if ($card->customer_id != $customer->id) {
//                 return response(401, 'Unauthorised');
//             }
//         }
//
//         $order = new Order();
//         $order->received_on = date('Y-m-d');
//         $order->delivery_address = $customer->address;
//         $order->billing_address = $customer->address;
//         $order->status = 'paid';
//         $order->customer_id = $customer->id;
//         $order->credit_card_id = $card->id;
//         $order->save();
//
//         $cart = $this->getCart($request);
//         foreach ($cart->getItems() as $item) {
//             $order->books()->attach($item->getBook()->id, [
//                 'quantity' => $item->getQuantity()]
//             );
//         }
//
//         $cart->removeAll();
//
//         $request->session()->flash('alert-success', 'Your order and payment have been received!');
//         return redirect()->route('user.orders.show', $order);
//     }

    private function getBasket(Request $request) {
        $cart = $request->session()->get('cart', null);
        if ($cart == null) {
            $cart = new ShoppingBasket();
            $request->session()->put('cart', $cart);
        }
        return $cart;
    }
 }
