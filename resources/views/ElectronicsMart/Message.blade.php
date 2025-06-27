@extends('layout.layout')
@section('content')
<div class="container message mt-3">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
        <i class="fa-solid fa-cart-shopping fa-2xl mb-5" style="color: #FFD43B;"></i>
            <h1 class="shopping">Thank You for Shopping!</h1>
            <p class="description mt-3">Your order has been placed successfully. We appreciate your trust in us!</p>
            <a href="/Home" class="btn btn-warning mt-4">Continue Shopping</a>
        </div>
    </div>
</div>
@endsection

<style>
    /* General Styles */
    body {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        background: linear-gradient(135deg, #800080, #4b0082);
        color: #fff;
    }

    .message {
        text-align: center;
        padding: 70px 20px;
        animation: fadeIn 2s ease-in-out;
    }

    .shopping {
        font-size: 3.5rem;
        font-weight: 700;
        color: #ffd700;
        text-shadow: 3px 3px 8px rgba(0, 0, 0, 0.3);
        animation: bounce 2s infinite;
    }

    .description {
        font-size: 1.25rem;
        color: #f0f0f0;
        text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2);
    }

    .btn-warning {
     background-color: yellow;
        border: none;
        padding: 10px 20px;
        font-size: 1rem;
        font-weight: 600;
        color: #fff;
        border-radius: 25px;
        text-transform: uppercase;
        transition: background 0.3s ease;
        box-shadow: 0 5px 15px rgba(255, 152, 0, 0.3);
    }

    .btn-warning:hover {
        background-color: #e68900;
        box-shadow: 0 8px 20px rgba(255, 152, 0, 0.4);
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: scale(0.8);
        }
        100% {
            opacity: 1;
            transform: scale(1);
        }
    }

    @keyframes bounce {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-10px);
        }
    }

    /* Responsive Styling */
    @media (max-width: 768px) {
        .shopping {
            font-size: 2.5rem;
        }

        .description {
            font-size: 1rem;
        }
    }

    @media (max-width: 576px) {
        .shopping {
            font-size: 2rem;
        }

        .description {
            font-size: 0.9rem;
        }

        .message {
            padding: 50px 15px;
        }

        .btn-primary {
            font-size: 0.9rem;
            padding: 8px 15px;
        }
    }
</style>