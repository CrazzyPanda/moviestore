@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div>
                <h3 class="title">Shopping Basket</h3>
            </div>
            <div>
                @if ($basket->isEmpty())
                    <p>There are no items in your shopping basket.</p>
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
                            <tr>
                                <th>Order Total:</th>
                                <td colspan="2"></td>
                                <td>€ {{ $basket->getTotalPrice() }}</td>
                            </tr>
                        </tbody>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
