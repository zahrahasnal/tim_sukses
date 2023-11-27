<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Website;


class LoginController extends Controller
{
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
            return redirect()->intended('dashboard'); // Ganti '/dashboard' dengan rute halaman setelah login
        } else {
            // Kata sandi salah atau pengguna tidak ditemukan
            return redirect()->route('showformlogin');
        }
    }

    public function dashboard()
    {
        $allData = Website::all();
        $allUser = User::all();

        $groupByKategori = $allUser->groupBy('level')->map->count();
        $titleLevel = "Level";
        $labelsLevel = $groupByKategori->keys()->toArray();
        $dataLevel = $groupByKategori->values()->toArray();

        $groupByPosisi = $allUser->groupBy('posisi')->map->count();
        $titlePosisi = "Posisi";
        $labelsPosisi = $groupByPosisi->keys()->toArray();
        $dataPosisi = $groupByPosisi->values()->toArray();

        $groupByKategori = $allData->groupBy('kategori')->map->count();
        $titleKategori = "Kategori";
        $labelsKategori = $groupByKategori->keys()->toArray();
        $dataKategori = $groupByKategori->values()->toArray();

        $groupByKdWhm = $allData->groupBy("kd_whm")->map->count();
        $titleKdWhm = "Kode WHM";
        $labelsKdWhm = $groupByKdWhm->keys()->toArray();
        $dataKdWhm = $groupByKdWhm->values()->toArray();

        $groupByStatus = $allData->groupBy('status')->map->count();
        $titleStatus = "Status";
        $labelsStatus = $groupByStatus->keys()->toArray();
        $dataStatus = $groupByStatus->values()->toArray();

        $groupByBerita = $allData->groupBy("berita")->map->count();
        $titleBerita = "Berita";
        $labelsBerita = $groupByBerita->keys()->toArray();
        $dataBerita = $groupByBerita->values()->toArray();

        $groupByLogo = $allData->groupBy("logo")->map->count();
        $titleLogo = "Logo";
        $labelsLogo = $groupByLogo->keys()->toArray();
        $dataLogo = $groupByLogo->values()->toArray();

        $groupByCms = $allData->groupBy('cms')->map->count();
        $titleCms = "CMS";
        $labelsCms = $groupByCms->keys()->toArray();
        $dataCms = $groupByCms->values()->toArray();

        $groupByKeamanan = $allData->groupBy("keamanan")->map->count();
        $titleKeamanan = "Keamanan";
        $labelsKeamanan = $groupByKeamanan->keys()->toArray();
        $dataKeamanan = $groupByKeamanan->values()->toArray();

        $groupByError = $allData->groupBy("error")->map->count();
        $titleError = "Error";
        $labelsError = $groupByError->keys()->toArray();
        $dataError = $groupByError->values()->toArray();

        $data = Website::paginate(10);

        // Pass the dummy data to the view
        return view(
            'admin.index',
            compact(
                'data',
                'titleKdWhm',
                'labelsKdWhm',
                'dataKdWhm',
                'titleKategori',
                'labelsKategori',
                'dataKategori',
                'titleStatus',
                'labelsStatus',
                'dataStatus',
                'titleBerita',
                'labelsBerita',
                'dataBerita',
                'titleLogo',
                'labelsLogo',
                'dataLogo',
                'titleCms',
                'labelsCms',
                'dataCms',
                'titleKeamanan',
                'labelsKeamanan',
                'dataKeamanan',
                'titleError',
                'labelsError',
                'dataError',
                'titleLevel',
                'labelsLevel',
                'dataLevel',
                'titlePosisi',
                'labelsPosisi',
                'dataPosisi'
            )
        );
    }

    public function logout()
    {
        Auth::logout();
        return view('login');
    }
}
