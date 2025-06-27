<!DOCTYPE html>
<html>
<head>
    <title>Payment Receipt</title>
</head>
<body>
    <h1>Thank You for Your Payment!</h1>
    <p>Here are the details of your order:</p>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Item</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($cartItems) && count($cartItems) > 0)
                @foreach ($cartItems as $item)
                    <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>${{ number_format($item['price'], 2) }}</td>
                        <td>{{ $item['quantity'] }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4">No items in the cart</td>
                </tr>
            @endif
        </tbody>
    </table>

    <p><strong>Total Price:</strong> ${{ number_format($totalPrice ?? 0, 2) }}</p>

    <p>We hope to see you again soon!</p>
</body>
</html>
