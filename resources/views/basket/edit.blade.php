@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Shopping Basket</div>

                <div class="card-body">
                    @if ($basket->isEmpty())
                    <p>There are no items in your shopping basket</p>
                    @else
                    <form method="POST" action="{{ route('basket.update') }}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="PUT">
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
                                    <td class="align-middle"><a href="{{ route('movies.show', $item->getMovie()->id) }}">{{ $item->getMovie()->name }}</a></td>
                                    <td class="align-middle">{{ number_format($item->getMovie()->price, 2) }}</td>
                                    <td class="align-middle"><input class="p-2" type="text" name="quantity[{{ $item->getMovie()->id }}]" value="{{ $item->getQuantity() }}" /></td>
                                    <td class="align-middle">{{ number_format($item->getTotalPrice(), 2) }}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <th class="align-middle" colspan="3"></th>
                                    <th class="align-middle">Total price</th>
                                    <th class="align-middle">{{ $basket->getTotalPrice() }}</th>
                                </tr>
                            </tbody>
                        </table>
                        <p class="text-right">
                            <button class="btn btn-outline-primary" type="submit">Save</button>
                            <a href="{{ route('basket.view') }}" class="btn btn-outline-secondary">Cancel</a>
                        </p>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
