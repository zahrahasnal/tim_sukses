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

    public function logout()
    {
        Auth::logout();
        return view('login');
    }
}
