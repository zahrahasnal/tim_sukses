<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;

class ProfileController extends Controller
{

    public function index()
    {
        $user = auth()->user(); // Mengambil data pengguna yang sedang login
        $decryptedPassword = Crypt::decryptString($user->password);
        $maskedPassword = substr($decryptedPassword, 0, 1) . str_repeat('*', strlen($decryptedPassword) - 2) . substr($decryptedPassword, -1);

        return view('admin.profile-users', compact('user', 'maskedPassword'));
    }
}
