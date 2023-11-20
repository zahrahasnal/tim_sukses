<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasFactory, Notifiable, CanResetPassword;

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
