<?php

use Illuminate\Database\Seeder;
use App\Order;
use App\Movie;
use App\Customer;
use App\User;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order = new Order();
        $order->date = "2018-11-12";
        $order->customer_id = User::where('name', 'Hosh Hoo')->first()->customer->id;
        $order->save();
        $order->movies()->attach(Movie::where('name', "Fantastic Beasts")->first()->id, ['quantity' => 1]);
        $order->movies()->attach(Movie::where('name', "Deadpool 2")->first()->id, ['quantity' => 1]);

        $order = new Order();
        $order->date = "2018-11-12";
        $order->customer_id = User::where('name', 'Grace Cautley')->first()->customer->id;
        $order->save();
        $order->movies()->attach(Movie::where('name', "The Greatest Showman")->first()->id, ['quantity' => 1]);
        $order->movies()->attach(Movie::where('name', "Coco")->first()->id, ['quantity' => 2]);
    }
}
