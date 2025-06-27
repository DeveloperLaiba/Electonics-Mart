<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'amount',
        'currency',
        'description',
        'source',
        'email',
        'name',
        'contact', 
        'address' ,

    ];
    public function orders()
    {
        return $this->hasMany(Order::class, 'charge_id', 'id'); // Explicit foreign key and local key
    }
}
