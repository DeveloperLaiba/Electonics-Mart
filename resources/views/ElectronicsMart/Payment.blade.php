@extends('layout.layout')
@section('content')
<div class="container-fluid mt-5">
    <div class="row">
        <form id="payment-form" action="/process-payment" method="POST">
            @csrf


            @php
            $totalPrice = 0; // Initialize total price
            @endphp

            @foreach ($cart as $item)
            <input type="hidden" name="cart[{{ $loop->index }}][name]" value="{{ $item['name'] }}">
            <input type="hidden" name="cart[{{ $loop->index }}][image]" value="{{ $item['image'] }}">
            <input type="hidden" name="cart[{{ $loop->index }}][price]" value="{{ $item['price'] }}">
            <input type="hidden" name="cart[{{ $loop->index }}][quantity]" value="{{ $item['quantity'] }}">

            @php
            // Add the price directly without considering quantity
            $totalPrice += isset($item['price']) ? (float) $item['price'] : 0;
            @endphp
            @endforeach

            <!-- Hidden input field for total price -->
            <input type="hidden" name="total_price" value="{{ number_format($totalPrice, 2, '.', '') }}">

            <!-- Display total price -->
            <div>
            <strong>Total Price:</strong> ${{ number_format($totalPrice, 2) }}

            </div>

        <!-- Input fields for user details -->
        <label for="name">
            <h4>Name</h4>
        </label>
        <input type="text" id="name" name="name" placeholder="Enter Your Name" required>

        <label for="email">
            <h4>Email</h4>
        </label>
        <input type="email" id="email" name="email" placeholder="Enter Your Email" required>

        <label for="contact">
            <h4>Contact</h4>
        </label>
        <input type="text" id="contact" name="contact" placeholder="Enter Your Contact Number" required>

        <label for="address">
            <h4>Address</h4>
        </label>
        <textarea id="address" name="address" placeholder="Enter Your Address" required></textarea>

        <!-- Buttons for payment options -->
        <button type="button" id="stripe-button" class="AProductbtn mb-3">Pay with Stripe</button>
        <button type="button" id="cod-button" class="AProductbtn mb-3">Cash on Delivery</button>

        <!-- Stripe payment fields, hidden by default -->
        <div id="stripe-fields" style="display: none;">
            <label for="card-number-element">
                <h4>Card Number</h4>
            </label>
            <div id="card-number-element" class="StripeElement"></div>

            <label for="card-expiry-element">
                <h4>Expiry Date</h4>
            </label>
            <div id="card-expiry-element" class="StripeElement"></div>

            <label for="card-cvc-element">
                <h4>CVV</h4>
            </label>
            <div id="card-cvc-element" class="StripeElement"></div>

            <div id="card-errors" role="alert"></div>

            <button type="button" id="submit-stripe-button" class="AProductbtn mb-5">Submit Payment</button>
        </div>   
        </form>
    </div>
</div>
<script>
    const stripe = Stripe("pk_test_51QUq5JA2JMvCQxKnpmoIFWqckyfoEIKMlT8U5luC0cm6BqEdRZDCiE5MBt9hR5jRRFTRf3v6w4m26qSM366V3iQx00iouR2cjA"); // Replace with your Stripe Publishable Key
    const elements = stripe.elements();

    // Stripe field styles
    const style = {
        base: {
            color: "#32325d",
            fontSize: "16px",
            "::placeholder": {
                color: "#aab7c4"
            }
        },
        invalid: {
            color: "#fa755a",
            iconColor: "#fa755a"
        }
    };

    // Create Stripe Elements
    const cardNumber = elements.create('cardNumber', { style });
    const cardExpiry = elements.create('cardExpiry', { style });
    const cardCvc = elements.create('cardCvc', { style });

    cardNumber.mount('#card-number-element');
    cardExpiry.mount('#card-expiry-element');
    cardCvc.mount('#card-cvc-element');

    // Button references
    const stripeButton = document.getElementById('stripe-button');
    const codButton = document.getElementById('cod-button');
    const stripeFields = document.getElementById('stripe-fields');
    const form = document.getElementById('payment-form');

    // Show Stripe fields when "Pay with Stripe" is clicked
    stripeButton.addEventListener('click', () => {
        stripeFields.style.display = 'block';
    });

    // Submit form directly for Cash on Delivery
    codButton.addEventListener('click', () => {
        form.action = "{{ route('process.cash') }}"; // Replace with your Cash on Delivery route
        form.submit();
    });

    // Handle Stripe payment submission
    document.getElementById('submit-stripe-button').addEventListener('click', async (event) => {
        event.preventDefault();
        const { token, error } = await stripe.createToken(cardNumber);
        if (error) {
            document.getElementById('card-errors').textContent = error.message;
        } else {
            const hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            form.submit();
        }
    });
</script>
@endsection