<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Discount extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'discount';

    protected $fillable = [
        'name',
        'desc',
        'discount_persen',
        'discount_max',
        'status_code'
    ];
}
