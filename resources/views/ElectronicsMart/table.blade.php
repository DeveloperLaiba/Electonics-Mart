@extends('AdminPanel.Layout.layout')
@section('content')
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="div mb-3">
                    <h1 class="text-center mt-3">Orders</h1>
                </div>
           <div class="table-responsive">
            <table class="table table-bordered" border="1" method="POST" action="{{ route('ElectronicsMart.table') }}">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Payment Email</th>
                        <th>Product Name</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($payments as $payment)
                        @foreach ($payment->orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $payment->receipt_email }}</td>
                                <td>{{ $order->name }}</td>
                                <td><img src="{{ asset('images/' . $order->image) }}" alt="{{ $order->name }}"
                                        style="width: 100px;"></td>
                                <td>${{ number_format($order->price, 2) }}</td>
                                <td>{{ $order->quantity }}</td>
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>
           </div>
            </div>
        </div>
    </main>
@endsection
