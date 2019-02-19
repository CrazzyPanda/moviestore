@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div>
                <h3 class="title">Checkout</h3>
            </div>
            <div class="card">
                @if ($basket->isEmpty())
                    <p>There are no items in your shopping basket</p>
                @else

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="title">Payment</h4>
                            <div class="card">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>Name on Card</th>
                                            <td>{{ $customer->nameOnCard }}</td>
                                        </tr>
                                        <tr>
                                            <th>Card Number</th>
                                            <td>{{ $customer->cardNumber }}</td>
                                        </tr>
                                        <tr>
                                            <th>Expiry Date</th>
                                            <td>{{ $customer->expiryDate }}</td>
                                        </tr>
                                        <tr>
                                            <th>CVV</th>
                                            <td>{{ $customer->cvv }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p></p>
                            <a href="#" class="btn btn-outline-primary">Select this Payment</a>
                            <a href="#" class="btn btn-outline-secondary">Edit your Details</a>
                        </div>
                        <div class="col-md-6">
                            <h4 class="title">Address</h4>
                            <div class="card">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>Address Line 1</th>
                                            <td>{{ $customer->addressLine1 }}</td>
                                        </tr>
                                        <tr>
                                            <th>Address Line 2</th>
                                            <td>{{ $customer->addressLine2 }}</td>
                                        </tr>
                                        <tr>
                                            <th>Town</th>
                                            <td>{{ $customer->town }}</td>
                                        </tr>
                                        <tr>
                                            <th>County</th>
                                            <td>{{ $customer->county }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p></p>
                            <a href="#" class="btn btn-outline-primary">Select this Address</a>
                            <a href="#" class="btn btn-outline-secondary">Edit your Details</a>
                        </div>
                    </div>
                    <p></p>

                    <h4 class="title">Order Summary</h4>
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
                    <p></p>
                    <button class="btn btn-outline-primary" type="submit">Pay</button>
                    <a href="{{ route('customer.home') }}" class="btn btn-outline-secondary">Cancel</a>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
