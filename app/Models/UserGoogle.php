<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGoogle extends Model
{
    use HasFactory;
    protected $table = 'user_google';

    protected $fillable = [
        'name',
        'email',
        // Add any other fields you want to fillable
    ];

}
