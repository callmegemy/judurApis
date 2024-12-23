<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'stripe_payment_id',
        'user_id',
        'amount',
        'currency',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}