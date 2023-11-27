<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Website;
use PDF;
use Illuminate\Support\Facades\Storage;
use App\Models\LaporanperBulan;

class LaporanBulanan extends Command
{
    protected $signature = 'generate:monthly-report';
    protected $description = 'Generate monthly report PDF for websites';

    public function handle()
    {
        $data = Website::all();
        $pdf = PDF::loadView('admin.pdf', compact('data'))->setPaper('a4', 'landscape');
        $pdf->setOptions(['isPhpEnabled' => true]);

        $currentMonthYear = now()->format('F Y');
        $filename = "laporan_monitoring_website_" . str_replace(' ', '_', $currentMonthYear) . ".pdf";
        $pdf->setOptions(['title' => "Laporan Monitoring Website - $currentMonthYear"]);
        $pdf->setOptions(['display_title' => true]);
        $pdf->setOptions(['filename' => $filename]);

        // Simpan ke direktori public/laporan
        $pdfContent = $pdf->output();
        Storage::put("laporan_bulanan/$filename", $pdfContent);


        $this->info("Monthly report generated and saved successfully: $filename");
    }
}
