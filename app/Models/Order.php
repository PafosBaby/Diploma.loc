<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_name',
        'user_surname',
        'user_phone',
        'user_email',
        'date',
        'total',

    ];

    public function items()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
