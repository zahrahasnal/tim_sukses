<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Mail\ResetPasswordMail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class LupaPasswordController extends Controller
{
    public function index()
    {
        return view('lupa-password');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user) {
            $resetToken = md5(now() . $user->email); // Generate a unique token
            $user->update(['reset_token' => $resetToken]);

            // Kirim email reset password ke pengguna
            try {
                Mail::to($user->email)->send(new ResetPasswordMail($resetToken));
            } catch (\Exception $e) {
                // Tangani kesalahan jika gagal mengirim email
                return back()->withErrors(['email' => 'Gagal mengirim email.']);
            }

            return redirect()->route('showformlogin')->with('status', 'Link reset password telah dikirim ke email Anda.');
        }

        return back()->withErrors(['email' => 'Email tidak ditemukan.']);
    }

    public function showResetForm($token)
    {
        $user = User::where('reset_token', $token)->first();

        if ($user) {
            return view('update-password', ['resetToken' => $token]);
        }

        abort(404);
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);

        $user = User::where('reset_token', $request->token)->first();

        if ($user) {
            // Validasi password dan simpan password baru
            $user->update([
                'password' => bcrypt($request->password),
                'reset_token' => null,
            ]);

            return redirect()->route('showformlogin')->with('status', 'Password Anda berhasil direset. Silakan login.');
        }

        abort(404);
    }
}
