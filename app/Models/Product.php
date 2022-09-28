<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'products';

    protected $fillable = [
        'name',
        'desc',
        'unit',
        'category',
        'price',
        'stok',
        'discount_id',
        'updated_by',
    ];
}
