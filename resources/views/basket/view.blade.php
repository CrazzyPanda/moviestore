@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div>
                <h3 class="title">Shopping Basket</h3>
            </div>
            <div>
                @if ($basket->isEmpty())
                    <p>There are no items in your shopping basket.</p>
                @else
            </div>
                <div class="card">
                    <div class="card-body">
                    <form method="POST" action="{{ route('basket.update') }}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="PUT">
                    <div class="card">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Movie</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($basket->getItems() as $item)
                                <tr data-movie-id="{{ $item->getMovie()->id }}">
                                    <td>{{ $item->getMovie()->name }}</td>
                                    <td>€ {{ number_format($item->getMovie()->price, 2) }}</td>
                                    <td><input class="p-2 cart-item-quantity" type="text" name="quantity[{{ $item->getMovie()->id }}]" value="{{ $item->getQuantity() }}" /></td>
                                    <td>€ {{ number_format($item->getTotalPrice(), 2) }}</td>
                                    <td><a href="#" class="btn btn-outline-danger cart-remove">Remove</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <p></p>
                    <button class="btn btn-outline-primary" type="submit">Save</button>If you made any changes to your basket, be sure to save them.
                    <p></p>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th colspan="3">Order Total:</th>
                                <td>€ {{ $basket->getTotalPrice() }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ route('basket.checkout') }}" class="btn btn-outline-primary">Proceed to Checkout</a>
                    <a href="{{ route('customer.home') }}" class="btn btn-outline-secondary">Cancel</a>
                </form>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript" defer>
$(document).ready(function () {
    $('.cart-remove').click(function (e) {
        e.preventDefault();
        $(this).closest("tr").find('input.cart-item-quantity').val(0);
        $(this).blur();
    });
});
</script>
@endsection
