<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderItem extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'order_items';

    protected $fillable = [
        'order_id',
        'product_id',
        'qty',
    ];
}
