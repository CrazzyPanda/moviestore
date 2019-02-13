@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <h3 class="title">Order Index</h3>
            </div>
            <p></p>
                <div class="card">
                    <table class="table">
                        <thread>
                            <tr>
                                <th>Order ID</th>
                                <th>Total Price</th>
                                <th>Customer Email</th>
                                <th>Date Purchased</th>
                            </tr>
                        </thread>
                        <tbody>
                            @foreach ($user->customer->orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>€ {{ $order->totalCost() }}</td>
                                <td>{{ $order->date }}</td>
                                <td>{{ $order->customer->user->email }}</td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
