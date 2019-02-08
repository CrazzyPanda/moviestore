@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div>
                <h2>Shopping Basket</h2>
            </div>
            <p></p>
            <div>
                @if ($basket->isEmpty())
                    <h6>There are no items in your shopping basket</h6>
                @else
            </div>
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
                                <td>€ {{ number_format($item->getMovie()->price, 2) }}</td>
                                <td>{{ $item->getQuantity() }}</td>
                                <td>€ {{ number_format($item->getTotalPrice(), 2) }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Order Total:</th>
                                <td>€ {{ $basket->getTotalPrice() }}</td>
                            </tr>
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
