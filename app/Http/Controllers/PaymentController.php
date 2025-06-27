<?php

namespace App\Http\Controllers;

use Stripe;
use App\Models\Order;
use Stripe\Charge;
use App\Models\Payment;
use Illuminate\Http\Request;
use App\Mail\PaymentReceipt;
use Illuminate\Support\Facades\Mail;

class PaymentController extends Controller
{
    public function processPayment(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'stripeToken' => 'required',
        ]);

        // Retrieve cart and total price from the request
        $cartItems = $request->input('cart'); // Cart items sent from the frontend
        $totalPrice = $request->input('total_price'); // Total price in dollars

        // Debug the input to ensure cartItems and totalPrice are correct
        if (empty($cartItems) || empty($totalPrice)) {
            return back()->with('error', 'Cart or total price is missing!');
        }

        // Set Stripe API key
        \Stripe\Stripe::setApiKey(config('services.stripe.secret'));

        // Create a Stripe charge
        $payment = Charge::create([
            'amount' => $totalPrice * 100, // Convert to cents
            'currency' => 'usd',
            'description' => 'Order Payment',
            'source' => $request->stripeToken,
            'receipt_email' => $request->email,
        ]);

        // Save payment details to the database
        $charge = Payment::create([
            'amount' => $totalPrice,
            'currency' => 'usd',
            'description' => 'Order Payment',
            'source' => $request->stripeToken,
            'email' => $request->email,
            'name' => $request->name,
            'contact' => $request->contact,
            'address' => $request->address,
        ]);

        // Save order details for each cart item
        foreach ($cartItems as $item) {
            Order::create([
                'charge_id' => $charge->id, // Link the charge
                'image' => $item['image'],
                'name' => $item['name'],
                'price' => $item['price'],
                'quantity' => $item['quantity'],
            ]);
        }

        // Send payment receipt email
        Mail::to($request->email)->send(new PaymentReceipt($cartItems, $totalPrice));

        // Clear the session (optional)
        session()->forget('addtocart');

        // Redirect with success message
        return redirect()->route('Message')->with('success', 'Payment processed successfully and receipt sent!');
    }
    public function cash(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'name' => 'required|string',
            'contact' => 'required|string',
            'address' => 'required|string',
            'cart' => 'required|array',
            'total_price' => 'required|numeric',
        ]);
    
        $cartItems = $request->input('cart');
        $totalPrice = $request->input('total_price');
    
        // Save payment details for Cash on Delivery
        $charge = Payment::create([
            'amount' => $totalPrice,
            'currency' => 'usd',
            'description' => 'Cash on delivery',
            'source' => 'COD', // Set source to 'COD' for cash payments
            'email' => $request->email,
            'name' => $request->name,
            'contact' => $request->contact,
            'address' => $request->address,
        ]);
    
        // Save order details for each cart item
        foreach ($cartItems as $item) {
            Order::create([
                'charge_id' => $charge->id, // Link the charge
                'image' => $item['image'],
                'name' => $item['name'],
                'price' => $item['price'],
                'quantity' => $item['quantity'],
            ]);
        }
    
        // Send payment receipt email
        Mail::to($request->email)->send(new PaymentReceipt($cartItems, $totalPrice));
    
        // Clear the session (optional)
        session()->forget('addtocart');
    
        // Redirect with success message
        return redirect()->route('Message')->with('success', 'Cash on Delivery payment processed successfully!');
    }
    
    public function table(Request $request)
    {
        // Fetch all payments with their related orders
        $payments = Payment::with('orders')->get();

        // Pass the data to the view
        return view('ElectronicsMart.table', compact('payments'));
    }
    public function clienttable(Request $request)
    {
        $charges = Payment::all();
        return view('ElectronicsMart.Clienttable', compact('charges'));
    }

    public function showReceipt()
    {
        // Dummy data for testing
        $cartItems = [
            [
                'name' => 'Product 1',
                'image' => 'product1.jpg',
                'price' => 10.99,
                'quantity' => 2,
            ],
            [
                'name' => 'Product 2',
                'image' => 'product2.jpg',
                'price' => 20.50,
                'quantity' => 1,
            ],
        ];

        $totalPrice = 42.48;

        // Return the email template with data for frontend testing
        return view('emails.payment_receipt', compact('cartItems', 'totalPrice'));
    }
}
