<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\LengthAwarePaginator;


class LaporanController extends Controller
{
    public function index(Request $request)
    {
        $files = Storage::files('laporan_bulanan');
        $data = [];

        foreach ($files as $file) {
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $bulanTahun = explode('_', $filename);

            $data[] = [
                'filename' => $filename,
                'bulan' => $bulanTahun[3] ?? '',
                'tahun' => $bulanTahun[4] ?? '',
            ];
        }

        $perPage = 10;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentItems = array_slice($data, ($currentPage - 1) * $perPage, $perPage);
        $data = new LengthAwarePaginator($currentItems, count($data), $perPage, $currentPage);

        // Get unique months and years for dropdown options
        $bulanOptions = array_unique(array_column($data->toArray()['data'], 'bulan'));
        $tahunOptions = array_unique(array_column($data->toArray()['data'], 'tahun'));

        // Remove empty values from dropdown options
        $bulanOptions = array_filter($bulanOptions);
        $tahunOptions = array_filter($tahunOptions);

        // Pass data to the view
        return view('admin.laporan', compact('data', 'bulanOptions', 'tahunOptions'));
    }

    public function viewFile($filename)
    {
        // Konversi nama file menjadi path lengkap
        $filePath = public_path("laporan_bulanan/{$filename}.pdf");

        // Pastikan file ada sebelum melanjutkan
        if (!file_exists($filePath)) {
            abort(404);
        }

        return view('admin.view-file', compact('filename'));
    }


    public function searchLaporan(Request $request)
    {
        // Get the search parameters from the request
        $bulan = $request->input('bulan');
        $tahun = $request->input('tahun');

        // Perform the search based on the parameters
        $files = Storage::files('laporan_bulanan');
        $data = [];

        foreach ($files as $file) {
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $bulanTahun = explode('_', $filename);

            // Check if the file matches the search criteria
            if ((!$bulan || $bulanTahun[3] == $bulan) && (!$tahun || $bulanTahun[4] == $tahun)) {
                $data[] = [
                    'filename' => $filename,
                    'bulan' => $bulanTahun[3] ?? '',
                    'tahun' => $bulanTahun[4] ?? '',
                ];
            }
        }

        $perPage = 10;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentItems = array_slice($data, ($currentPage - 1) * $perPage, $perPage);
        $data = new LengthAwarePaginator($currentItems, count($data), $perPage, $currentPage);

        // Get unique months and years for dropdown options
        $bulanOptions = array_unique(array_column($data->toArray()['data'], 'bulan'));
        $tahunOptions = array_unique(array_column($data->toArray()['data'], 'tahun'));

        // Remove empty values from dropdown options
        $bulanOptions = array_filter($bulanOptions);
        $tahunOptions = array_filter($tahunOptions);

        // Pass filtered data to the view
        return view('admin.laporan', compact('data', 'bulanOptions', 'tahunOptions'));
    }
}
