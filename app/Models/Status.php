<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Status extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'status';

    protected $fillable = [
        'code',
        'name',
    ];
}
