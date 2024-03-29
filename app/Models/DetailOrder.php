<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'orders_id',
        'product_name',
        'product_price',
        'product_qty',
    ];

    public function order() {
        return $this->belongsTo(Order::class, 'order_id');
    }
}