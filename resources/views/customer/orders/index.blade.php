@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <h3 class="title">My Orders</h3>
            </div>
            <table class="table table-stripe table-dark table-bordered">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Total Cost</th>
                        <th>Date Purchased</th>
                        <th colspan="1"></th>
                    </tr>
                </thead>
              <tbody>
                  @foreach($orders as $order)
                      <tr>
                          <th>{{ $order->id }}</th>
                          <td>{{ $order->totalCost() }}</td>
                          <td>{{ $order->date }}</td>
                          <td>
                              <a class="btn btn-outline-primary" href="{{ route('customer.orders.show', $order) }}">View</a>
                          </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
        </div>
    </div>
</div>
@endsection
