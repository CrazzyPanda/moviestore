@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div>
                <h3 class="title">Order Confirmation</h3>
            </div>
            <div class="card">

                <div class="card-body">
                    <h4 class="title">Order Summary</h4>
                    <h6>Thank you for shopping with us. Your order will arrive in 3 - 5 business days.</h6>

                    <div class="card">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
