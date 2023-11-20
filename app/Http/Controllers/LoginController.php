<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Website;


class LoginController extends Controller
{
    public function dashboard()
    {
        $data = Website::paginate(10);
        return view('admin.index', compact('data'));
    }

    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validasi input login
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->input('email'))->first();

        if ($user && Hash::check($request->input('password'), $user->password)) {
            // Kata sandi benar
            Auth::login($user);
            return redirect()->intended('/dashboard'); // Ganti '/dashboard' dengan rute halaman setelah login
        } else {
            // Kata sandi salah atau pengguna tidak ditemukan
            return redirect()->route('showformlogin');
        }
    }

    public function logout()
    {
        Auth::logout();
        return view('login');
    }
}
