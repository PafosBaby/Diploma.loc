<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'cart';
    protected $fillable = [
        'session_id',
        'product_id',
        'user_id',
        'price',
        'qty',
        'subtotal'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getPrice(){
        return number_format($this->price, 0, ',' ,' ' ). ' ₽';
     }

     public function getTotalPrice(){
        return number_format($this->price * $this->qty, 0, ',' ,' ' ). ' ₽';
     }
}
