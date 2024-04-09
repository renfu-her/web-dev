<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCheckIn extends Model
{
    use HasFactory;

    private $fillable = [
        'user_id',
        'date',
        'check_in',
        'check_out'
    ];
}
