<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Closure;


class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        return view('admin.index-users', compact('users'));
    }

    public function create()
    {
        return view('admin.create-users');
    }

    public function store(Request $request)
    {
        // Validasi input pengguna, seperti nama, email, password, dan lain-lain
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:users',
            'no_hp' => 'required',
            'alamat' => 'required',
            'jenis_kel' => 'required',
            'password' => [
                'required',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/',
            ],
            'foto' => 'required|image|max:2048', // Validasi foto
            'level' => 'required',
            'posisi' => 'required',
        ]);

        // Menyimpan pengguna baru
        $user = new User;
        $user->nama = $request->input('nama');
        $user->email = $request->input('email');
        $user->no_hp = $request->input('no_hp');
        $user->alamat = $request->input('alamat');
        $user->jenis_kel = $request->input('jenis_kel');
        $user->password = Hash::make($request->input('password'));

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension(); // Mendapatkan ekstensi file

            // Menyimpan file langsung di dalam direktori public/foto_users
            $file->storeAs('foto_users', $filename, 'public');

            $user->foto = $filename; // Menyimpan nama file ke dalam kolom foto
        }



        $user->level = $request->input('level');
        $user->posisi = $request->input('posisi');
        $user->save();

        if ($user) {
            return redirect()->route('users')->with('success', 'Data berhasil disimpan.');
        } else {
            return redirect()->back()->with('error', 'Gagal menyimpan data.');
        }
        // Redirect atau lakukan tindakan lain setelah menyimpan pengguna
    }


    public function update(Request $request, $id)
    {
        //validasi input
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'jenis_kel' => 'required',
            'password' => [
                'required',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/',
            ], // Validasi foto
            'level' => 'required',
            'posisi' => 'required',
        ]);

        $users = User::find($id);

        if (!$users) {
            return redirect()->route('users')->with('error', 'Pengguna tidak ditemukan.');
        }

        // perbarui data
        $users->nama = $request->input('nama');
        $users->email = $request->input('email');
        $users->no_hp = $request->input('no_hp');
        $users->alamat = $request->input('alamat');
        $users->jenis_kel = $request->input('jenis_kel');
        $users->password = Hash::make($request->input('password'));
        $users->password = Hash::make($request->input('password'));

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('public/foto');
            $users->foto = $path;
        }

        $users->level = $request->input('level');
        $users->posisi = $request->input('posisi');

        // Simpan perubahan.
        $users->save();

        return redirect()->route('users')->with('success', 'Data pengguna berhasil diperbarui.');
    }


    public function destroy($id)
    {
        $users = User::find($id);

        if ($users) { // Periksa apakah objek ditemukan
            if ($users->delete()) {
                return redirect()->route('users')->with('success', 'Data berhasil dihapus.');
            } else {
                return redirect()->route('users')->with('error', 'Gagal menghapus data.');
            }
        } else {
            return redirect()->route('users')->with('error', 'Data tidak ditemukan.');
        }
    }

    public function edit($id)
    {
        $users = User::find($id);
        if (!$users) {
            $users = new User;
        }
        return view('admin.update-users', compact('users'));
    }

    public function handle($request, Closure $next, $role)
    {
        if (auth()->check() && auth()->user()->level === $role) {
            return $next($request);
        }

        return redirect()->route('home')->with('error', 'Anda tidak memiliki izin untuk mengakses halaman ini.');
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        $users = User::where(function ($query) use ($searchTerm) {
            $query->where('nama', 'LIKE', "%$searchTerm%")
                ->orWhere('email', 'LIKE', "%$searchTerm%")
                ->orWhere('no_hp', 'LIKE', "%$searchTerm%")
                ->orWhere('alamat', 'LIKE', "%$searchTerm%")
                ->orWhere('jenis_kel', 'LIKE', "%$searchTerm%")
                ->orWhere('level', 'LIKE', "%$searchTerm%")
                ->orWhere('posisi', 'LIKE', "%$searchTerm%");
            // Tambahkan kondisi pencarian lainnya sesuai kebutuhan
        })->paginate(10);

        return view('admin.index-users', compact('users', 'searchTerm'));
    }
}
