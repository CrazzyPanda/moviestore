@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <h3 class="title">Order Confirmation</h3>
                <p>{{ $order->date }}</p>
                <p>Thank you for your order from Online Movie Shop. Your order is being processed and should arrive in 3 - 5 business days.
                    You will receive an email confirmation detailing your order and payment, if you have any questions, please contact us at onlinemovieshop@gmail.com.</p>
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
@endsection
