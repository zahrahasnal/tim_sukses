<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Website;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query'); // Ambil nilai pencarian dari formulir
        $results = User::join('websites', 'users.id', '=', 'websites.user_id')
        ->where(function ($queryBuilder) use ($query) {
            $queryBuilder->where('users.nama', 'LIKE', "%$query%")
            ->orWhere('users.email', 'LIKE', "%$query%")
            ->orWhere('users.no_hp', 'LIKE', "%$query%")
            ->orWhere('users.alamat', 'LIKE', "%$query%")
            ->orWhere('users.jenis_kel', 'LIKE', "%$query%")
            ->orWhere('websites.link', 'LIKE', "%$query%")
            ->orWhere('websites.kategori', 'LIKE', "%$query%")
            ->orWhere('websites.kd_whm', 'LIKE', "%$query%")
            ->orWhere('websites.status', 'LIKE', "%$query%")
            ->orWhere('websites.tgl_pemantauan', 'LIKE', "%$query%")
            ->orWhere('websites.tgl_last_update', 'LIKE', "%$query%")
            ->orWhere('websites.berita', 'LIKE', "%$query%")
            ->orWhere('websites.logo', 'LIKE', "%$query%")
            ->orWhere('websites.cms', 'LIKE', "%$query%")
            ->orWhere('websites.keamanan', 'LIKE', "%$query%")
            ->orWhere('websites.error', 'LIKE', "%$query%")
            ->orWhere('websites.ket_error', 'LIKE', "%$query%");
        })
            ->select('users.*', 'websites.link', 'websites.kategori', 'websites.kd_whm', 'websites.status', 'websites.tgl_pemantauan', 'websites.tgl_last_update', 'websites.berita', 'websites.logo', 'websites.cms', 'websites.keamanan', 'websites.error', 'websites.ket_error')
            ->get();


        return view('search.results', ['results' => $results]);
    }
}
