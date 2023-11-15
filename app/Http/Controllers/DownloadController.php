<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Website;
use PDF;

class DownloadController extends Controller
{
    public function downloadAll()
    {
        $data = Website::all();
        $pdf = PDF::loadView('admin.pdf', compact('data'))->setPaper('a4', 'landscape');
        $pdf->setOptions(['isPhpEnabled' => true]);

        $currentMonthYear = now()->format('F Y');
        $customTitle = "Laporan Monitoring Website<br>$currentMonthYear";

        $pdf->setOptions(['title' => $customTitle]);
        $pdf->setOptions(['display_title' => true]);
        $pdf->setOptions(['filename' => "laporan_monitoring_website" . "_$currentMonthYear.pdf"]);

        return $pdf->download("laporan_monitoring_website" . "_$currentMonthYear.pdf");
    }

    public function downloadCategoryPDF($category)
    {
        $data = Website::where('kategori', $category)->get();
        $pdf = PDF::loadView('admin.pdf', compact('data'))->setPaper('a4', 'landscape');
        $pdf->setOptions(['isPhpEnabled' => true]);

        $currentMonthYear = now()->format('F Y'); // Format bulan tahun saat ini
        $customTitle = "Laporan Monitoring Website Bidang $category<br>$currentMonthYear";

        $pdf->setOptions(['title' => $customTitle]);
        $pdf->setOptions(['display_title' => true]); // Menampilkan judul di PDF
        $pdf->setOptions(['filename' => "laporan_monitoring_website_$category" . "_$currentMonthYear.pdf"]); // Nama file

        return $pdf->download("laporan_monitoring_website_$category" . "_$currentMonthYear.pdf");
        return view('admin.pdf', compact('data', 'customTitle'));

    }

    public function dwnldPendidikan()
    {
        return $this->downloadCategoryPDF("Bidang Pendidikan");
    }

    public function dwnldPemerintahan()
    {
        return $this->downloadCategoryPDF("Bidang Pemerintahan");
    }

    public function dwnldIntegrasiSistem()
    {
        return $this->downloadCategoryPDF("Bidang Integrasi Sistem");
    }

    public function dwnldOPD()
    {
        return $this->downloadCategoryPDF("Web OPD");
    }

    public function dwnldKecamatan()
    {
        return $this->downloadCategoryPDF("Web Kecamatan");
    }

    public function dwnldKelurahan()
    {
        return $this->downloadCategoryPDF("Web Kelurahan");
    }

    public function dwnldSd()
    {
        return $this->downloadCategoryPDF("Web SD");
    }

    public function dwnldSmp()
    {
        return $this->downloadCategoryPDF("Web SMP");
    }
}
