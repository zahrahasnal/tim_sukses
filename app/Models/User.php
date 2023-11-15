<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'nama', 
        'email', 
        'no_hp', 
        'alamat', 
        'jenis_kel', 
        'password', 
        'foto', 
        'level', 
        'posisi',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    // ...
}