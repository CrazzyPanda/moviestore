@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div><h3 class="title">My Orders</h3></div>
            <table class="table table-light">
              <thead>
                <tr>
                  <th scope="col">Order ID</th>
                  <th scope="col">Total Cost</th>
                  <th scope="col">Date Purchased</th>
                </tr>
              </thead>
              <tbody>
                @foreach($orders as $order)
                <tr>
                  <th scope="row">{{ $order->id }}</th>
                  <td>{{ $order->totalCost() }}</td>
                  <td>{{ $order->date }}</td>
                  <td><a class="btn btn-outline-primary" href="{{ route('customer.orders.show', $order) }}">View</a></td>
                </tr>
                @endforeach
              </tbody>
          </table>
        </div>
    </div>
</div>
@endsection
