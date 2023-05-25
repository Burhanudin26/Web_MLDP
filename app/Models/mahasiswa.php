<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;   
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;


class Mahasiswa extends Authenticatable implements AuthenticatableContract
{
    use HasFactory;
    protected $fillable = ['name', 'NIM', 'email','password'];
}
