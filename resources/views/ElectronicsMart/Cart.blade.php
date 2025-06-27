@extends('layout.layout')
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
            <img src="{{asset('images/'.$product->image)}}" alt="Product Image">
        </div>
        <div class="col-lg-6">
            <h3>{{$product->name}}</h3>
            <p>Price: <span id="productPrice">{{$product->price}}</span></p>
            <label for="quantity">Quantity</label>
            <button id="decreaseQuantity" class="btn btn-outline-secondary">-</button>
            <input type="number" id="quantityInput" min="1" value="1">
            <button id="increaseQuantity" class="btn btn-outline-secondary">+</button>
            <br>
            <h2>Total Price: <span id="price">{{$product->price}}</span></h2>

            <form method="POST" action="{{ route('addtocart') }}" class="text-center mb-3">
                @csrf
                <input type="hidden" name="image" id="image" value="{{ $product->image }}" required>
                <input type="hidden" name="name" id="name" value="{{ $product->name }}" required>
                <input type="hidden" id="hiddenTotalPrice" name="price" value="{{ $product->price }}">
                <input type="hidden" name="quantity" id="hiddenQuantity" value="1" required>
                <button class="AProductbtn mt-3" type="submit">Add to Cart</button>
            </form>

        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">

<script>
   document.addEventListener("DOMContentLoaded", function () {
    const increaseBtn = document.getElementById("increaseQuantity");
    const decreaseBtn = document.getElementById("decreaseQuantity");
    const quantityInput = document.getElementById("quantityInput");
    const hiddenQuantity = document.getElementById("hiddenQuantity");
    const productPrice = parseFloat(document.getElementById("price").textContent.replace(/[^0-9.]/g, ""));
    const totalPriceSpan = document.getElementById("price");
    const hiddenTotalPriceInput = document.getElementById("hiddenTotalPrice");

    function updateTotalPrice() {
        const quantity = parseInt(quantityInput.value) || 1;
        const totalPrice = (productPrice * quantity).toFixed(2);

        // Update total price in visible span and hidden input
        totalPriceSpan.textContent = `$${totalPrice}`;
        hiddenTotalPriceInput.value = totalPrice;

        // Update hidden quantity input
        hiddenQuantity.value = quantity;
    }

    increaseBtn.addEventListener("click", function () {
        quantityInput.value = parseInt(quantityInput.value) + 1;
        updateTotalPrice();
    });

    decreaseBtn.addEventListener("click", function () {
        if (quantityInput.value > 1) {
            quantityInput.value = parseInt(quantityInput.value) - 1;
            updateTotalPrice();
        }
    });

    quantityInput.addEventListener("input", function () {
        if (quantityInput.value < 1) quantityInput.value = 1;
        updateTotalPrice();
    });

    // Initial update on page load
    updateTotalPrice();
});

</script>

@endsection