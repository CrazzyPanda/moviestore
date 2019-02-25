@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <h3 class="title">Checkout</h3>
            </div>
            <div>
                @if ($basket->isEmpty())
                    <p>There are no items in your shopping basket</p>
                @else
                    <form method="POST" action="{{ route('basket.pay') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="PUT">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="title">Payment</h5>
                                <table class="table table-striped table-dark table-bordered">
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
                            <p></p>
                            <a class="btn btn-outline-secondary" href="{{ route('customer.profile.edit') }}">Edit your Details</a>
                        </div>
                        <div class="col-md-6">
                            <h5 class="title">Address</h5>
                                <table class="table table-striped table-dark table-bordered">
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
                            <p></p>
                        </div>
                    </div>
                    <p></p>
                    <h5 class="title">Order Summary</h5>
                        <table class="table table-striped table-dark table-bordered">
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
                                <tr>
                                    <th colspan="3">Order Total:</th>
                                    <td>€ {{ $basket->getTotalPrice() }}</td>
                                </tr>
                            </tbody>
                        </table>
                        @endif
                    <p></p>
                    <button class="btn btn-outline-primary" type="submit">Pay</button>
                    <a href="{{ route('customer.home') }}" class="btn btn-outline-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
