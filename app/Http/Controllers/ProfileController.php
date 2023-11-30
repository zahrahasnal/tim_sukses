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
        return view('user.profile-users', compact('user'));
    }
}
