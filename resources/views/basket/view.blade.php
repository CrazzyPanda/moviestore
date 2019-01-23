@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Shopping basket</div>

                <div class="card-body">
                    @if ($basket->isEmpty())
                    <p>There are no items in your shopping basket</p>
                    @else
                    <p>

                    </p>
                    <table>
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
                    <p>Total price: {{ $basket->getTotalPrice() }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
