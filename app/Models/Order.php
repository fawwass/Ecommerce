<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'is_paid',
        'payment_receipt'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function carts()
    {
        return $this->belongsToMany(Product::class);
    }
}
