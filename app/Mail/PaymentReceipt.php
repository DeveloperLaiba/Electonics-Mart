<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PaymentReceipt extends Mailable
{
    use Queueable, SerializesModels;

    public $cartItems;
    public $totalPrice;

    /**
     * Create a new message instance.
     *
     * @param array $cartItems
     * @param float $totalPrice
     */
    public function __construct($cartItems, $totalPrice)
    {
        $this->cartItems = $cartItems;
        $this->totalPrice = $totalPrice;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Payment Receipt')
            ->view('emails.payment_receipt') // Ensure this matches the view's location
            ->with([
                'cartItems' => $this->cartItems,
                'totalPrice' => $this->totalPrice,
            ]);
    }
}
