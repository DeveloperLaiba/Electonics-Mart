@extends('layout.layout')

@section('content')
<div class="table-container">
    <table class="responsive-table">
        <thead>
            <tr>
                <th class="text-center">SL No.</th>
                <th class="text-center">Product</th>
                <th class="text-center">Product Name</th>
                <th class="text-center">Price</th>
                <th class="text-center">Quantity</th>
                <th class="text-center">Remove</th>
            </tr>
        </thead>
        <tbody>
            @php
            $totalPrice = 0; // Initialize total price
            @endphp

            @foreach ($cart as $id => $item)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td class="text-center">
                    <img src="{{ asset('images/' . ($item['image'] ?? 'default.png')) }}" width="100px" height="100px" alt="Product Image">
                </td>
                <td class="text-center">{{ $item['name'] ?? 'N/A' }}</td>
          <td class="text-center">${{ number_format((float) ($item['price'] ?? 0), 2) }}</td>

                <td class="text-center">{{ $item['quantity'] ?? '0' }}</td>
                <td class="text-center">
                    <a href="{{ route('deleteCart', $id) }}" style="text-decoration: none;">
                        <button class="remove-btn">X</button>
                    </a>
                </td>
            </tr>
            @php
            // Add current item's price to total (ensuring price is numeric)
            $totalPrice += isset($item['price']) && is_numeric($item['price']) ? (float)$item['price'] : 0;
            @endphp
            @endforeach

            <!-- Display total price -->
            <tr>
                <td colspan="5" class="text-center"><strong>Total Price:</strong></td>
                <td class="text-center"><strong>${{ number_format($totalPrice, 2) }}</strong></td>
            </tr>
        </tbody>
    </table>
    <a href="/Payment"><button class="AProductbtn1">Make a Payment</button></a>
</div>
@endsection
