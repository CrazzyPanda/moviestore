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
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Movie</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($basket->getItems() as $item)
                                <tr>
                                    <td>{{ $item->getMovie()->name }}</td>
                                    <td>{{ number_format($item->getMovie()->price, 2) }}</td>
                                    <td>{{ $item->getQuantity() }}</td>
                                    <td>{{ number_format($item->getTotalPrice(), 2) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th colspan="3">Order Total:</th>
                                    <td>€ {{ $basket->getTotalPrice() }}</td>
                                </tr>
                            </tbody>
                        </table>
                        @endif
                    </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
