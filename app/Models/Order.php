<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'charge_id',
        'image',
        'name',
        'price',
        'quantity',
    ];
    public function payment()
    {
        return $this->belongsTo(Payment::class, 'charge_id', 'id'); // Explicit foreign key and local key
    }
}
