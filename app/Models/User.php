<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory;

    protected $fillable = [
        'name',
        'role',
        'email',
        'NI', // Add 'number' to the fillable attributes
        'password',
    ];


}
