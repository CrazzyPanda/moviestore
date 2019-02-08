@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <h3>Order Details</h3>
            </div>
            <p></p>
                <!-- <div class="card"> -->
                    <table class="table table-dark table-bordered">
                        <tbody>
                            <tr>
                                <th>Customer name:</th><td>{{ $order->customer->user->name }}</td>
                            </tr>
                            <tr>
                                <th>Customer email:</th><td>{{ $order->customer->user->email }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-striped table-dark table-bordered">
                        <thead>
                            <tr>
                                <th>Movie</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order->movies as $movie)
                            <tr>
                                <td>{{ $movie->name }}</td>
                                <td>€ {{ $movie->price }}</td>
                                <td>{{ $movie->pivot->quantity }}</td>
                                <td>€ {{ $movie->price * $movie->pivot->quantity }}</td>
                            </tr>
                            @endforeach
                            <tr>
                                <th colspan="3">Total</th>
                                <td>€ {{ $order->totalCost() }}</td>
                            </tr>
                        </tbody>
                    </table>
                <!-- </div> -->
            </div>
        </div>
    </div>
</div>
@endsection
