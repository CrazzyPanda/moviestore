<?php

namespace App\Http\Controllers;

class ShoppingBasketItem {
    private $movie;
    private $quantity;

    public function  __construct($movie, $qty) {
        $this->movie = $movie;
        $this->quantity = $qty;
    }

    public function getMovie() { return $this->movie; }
    public function getQuantity() { return $this->quantity; }
    public function getTotalPrice() { return $this->movie->price * $this->quantity; }
    public function setQuantity($qty) { $this->quantity = $qty; }
}
