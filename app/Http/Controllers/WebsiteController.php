<?php

namespace App\Http\Controllers;

use App\Models\Website;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\User;


class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Website::paginate(10);
        return view('website.index-website', compact('data'));
    }

    public function create()
    {
        return view('website.create-website');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function store(Request $request)
    {
        // Validasi data
        $rules = [
            'link' => 'required',
            'kategori' => 'required',
            'kd_whm' => 'required',
            'status' => 'required',
            'tgl_pemantauan' => 'required',
            'tgl_last_update' => 'required',
            'berita' => 'required',
            'logo' => 'required',
            'cms' => 'required',
            'keamanan' => 'required',
            'error' => 'required',
            'ket_error' => 'required_if:error,Ada',
            'submitted' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Simpan data
        $websiteData = [
            'link' => $request->input('link'),
            'kategori' => $request->input('kategori'),
            'kd_whm' => $request->input('kd_whm'),
            'status' => $request->input('status'),
            'tgl_pemantauan' => $request->input('tgl_pemantauan'),
            'tgl_last_update' => $request->input('tgl_last_update'),
            'berita' => $request->input('berita'),
            'logo' => $request->input('logo'),
            'cms' => $request->input('cms'),
            'keamanan' => $request->input('keamanan'),
            'error' => $request->input('error'),
            'ket_error' => $request->input('ket_error'),
            'submitted' => $request->input('submitted'),
        ];

        $website = Website::create($websiteData);

        if ($website) {
            return redirect()->route('website')->with('success', 'Data berhasil disimpan.');
        } else {
            return redirect()->back()->with('error', 'Gagal menyimpan data.');
        }
    }



    public function edit($id)
    {
        $website = Website::find($id);
        if (!$website) {
            $website = new Website;
        }
        return view('website.update-website', compact('website'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data
        $request->validate([
            'link' => 'required',
            'kategori' => 'required',
            'kd_whm' => 'required',
            'status' => 'required',
            'tgl_pemantauan' => 'required',
            'tgl_last_update' => 'required',
            'berita' => 'required',
            'logo' => 'required',
            'cms' => 'required',
            'keamanan' => 'required',
            'error' => 'required',
            'ket_error' => 'required_if:error,Ada',
            'submitted' => 'required'
        ]);

        // Perbarui atribut sesuai dengan input dari formulir
        $data = Website::find($id);
        if (!$data) {
            return redirect()->route('website')->with('error-find', 'Data tidak ditemukan.');
        }

        $data->link = $request->input('link');
        $data->kategori = $request->input('kategori');
        $data->kd_whm = $request->input('kd_whm');
        $data->status = $request->input('status');
        $data->tgl_pemantauan = $request->input('tgl_pemantauan');
        $data->tgl_last_update = $request->input('tgl_last_update');
        $data->berita = $request->input('berita');
        $data->logo = $request->input('logo');
        $data->cms = $request->input('cms');
        $data->keamanan = $request->input('keamanan');
        $data->error = $request->input('error');
        $data->ket_error = $request->input('ket_error');
        $data->submitted = $request->input('submitted');

        if ($data->save()) {
            return redirect()->route('website')->with('success', 'Data berhasil diperbarui.');
        } else {
            return redirect()->route('update-website', ['id' => $id])->with('error', 'Gagal memperbarui data.');
        }
    }

    // public function edit($id)
    // {
    //     $data = Website::find($id);
    //     return view('website.update-website', compact('website'));
    // }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        // Lakukan pencarian pada seluruh kolom tabel 'websites'
        $data = Website::where(function ($query) use ($searchTerm) {
            $query->where(
                'link',
                'LIKE',
                "%$searchTerm%"
            )
                ->orWhere('kategori', 'LIKE', "%$searchTerm%")
                ->orWhere('kd_whm', 'LIKE', "%$searchTerm%")
                ->orWhere('status', 'LIKE', "%$searchTerm%")
                ->orWhere('tgl_pemantauan', 'LIKE', "%$searchTerm%")
                ->orWhere('tgl_last_update', 'LIKE', "%$searchTerm%")
                ->orWhere('berita', 'LIKE', "%$searchTerm%")
                ->orWhere('logo', 'LIKE', "%$searchTerm%")
                ->orWhere('cms', 'LIKE', "%$searchTerm%")
                ->orWhere('keamanan', 'LIKE', "%$searchTerm%")
                ->orWhere('error', 'LIKE', "%$searchTerm%")
                ->orWhere('ket_error', 'LIKE', "%$searchTerm%");
        })->paginate(10);

        return view('website.index-website', compact('data', 'searchTerm'));
    }

    public function destroy($id)
    {
        $data = Website::find($id);

        if ($data->delete()) {
            return redirect()->route('website')->with('success', 'Data berhasil dihapus.');
        } else {
            return redirect()->route('website')->with('error', 'Gagal menghapus data.');
        }
    }

    public function pendidikan()
    {
        $data = Website::where('kategori', 'Bidang Pendidikan')->paginate(10);
        return view('website.index-website', compact('data'));
    }

    public function infrastruktur()
    {
        $data = Website::where('kategori', 'Bidang Infrastruktur')->paginate(10);
        return view('website.index-infrastruktur', compact('data'));
    }

    public function pemerintahan()
    {
        $data = Website::where('kategori', 'Bidang Pemerintahan')->paginate(10);
        return view('website.index-pemerintahan', compact('data'));
    }

    public function layananPublik()
    {
        $data = Website::where('kategori', 'Bidang Layanan Publik')->paginate(10);
        return view('website.index-layananpublik', compact('data'));
    }

    public function integrasiSistem()
    {
        $data = Website::where('kategori', 'Bidang Integrasi Sistem')->paginate(10);
        return view('website.index-integrasiSistem', compact('data'));
    }

    public function webOPD()
    {
        $data = Website::where('kategori', 'Web OPD')->paginate(10);
        return view('website.index-webOPD', compact('data'));
    }

    public function webKecamatan()
    {
        $data = Website::where('kategori', 'Web Kecamatan')->paginate(10);
        return view('website.index-webKecamatan', compact('data'));
    }

    public function webKelurahan()
    {
        $data = Website::where('kategori', 'Web Kelurahan')->paginate(10);
        return view('website.index-webKelurahan', compact('data'));
    }

    public function sd()
    {
        $data = Website::where('kategori', 'Web SD')->paginate(10);
        return view('website.index-websd', compact('data'));
    }

    public function smp()
    {
        $data = Website::where('kategori', 'Web SMP')->paginate(10);
        return view('website.index-websmp', compact('data'));
    }
}
