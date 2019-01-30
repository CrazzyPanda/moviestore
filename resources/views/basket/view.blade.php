@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <h2>Shopping Basket</h2>
            </div>
            <p></p>
            <div>
                @if ($basket->isEmpty())
                    <h5>There are no items in your shopping basket</h5>
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
                                <td>{{ number_format($item->getMovie()->price, 2) }}</td>
                                <td>{{ $item->getQuantity() }}</td>
                                <td>€ {{ number_format($item->getTotalPrice(), 2) }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Order Price Total: € {{ $basket->getTotalPrice() }}</td>
                            </tr>
                        </tbody>
                    @endif
            </div>
        </div>
    </div>
</div>
@endsection
