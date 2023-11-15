<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user(); // Mengambil data pengguna yang sedang login
        return view('admin.profile-users', compact('user'));
    }
}
