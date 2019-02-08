<?php

namespace App\Http\Controllers;

class ShoppingBasket {
    private $items;

    public function __construct() {
        $this->items = array();
    }

    public function getItems() { return $this->items; }

    public function getTotalPrice() {
        $total = 0.0;
        foreach ($this->items as $item) {
            $total += $item->getTotalPrice();
        }
        return $total;
    }

    public function add($movie, $qty) {
        if (isset($this->items[$movie->id])) {
            $item = $this->items[$movie->id];
            $oldQuantity = $item->getQuantity();
            $item->setQuantity($oldQuantity + $qty);
        }
        else {
            $item = new ShoppingBasketItem($movie, $qty);
            $this->items[$movie->id] = $item;
        }
    }
    //
    // public function update($movie, $qty) {
    //     if (isset($this->items[$movie->id])) {
    //         if ($qty > 0) {
    //             $item = $this->items[$movie->id];
    //             $item->setQuantity($qty);
    //         }
    //         else if ($qty == 0) {
    //             $this->item[$movie->id] = NULL;
    //             unset($this->items[$movie->id]);
    //         }
    //     }
    //     else {
    //         throw new Exception("Illegal request.");
    //     }
    // }

    public function isEmpty() {
        return empty($this->items);
    }

    // public function removeAll() {
    //     $this->items = array();
    // }
}
