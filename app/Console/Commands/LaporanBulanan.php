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

    public function handle($showCurrentDate = false)
    {
        // Get data for the report
        $data = Website::all();

        // Create PDF
        $pdf = PDF::loadView('website.pdf', compact('data', 'showCurrentDate'))->setPaper('a3', 'landscape');
        $pdf->setOptions(['isPhpEnabled' => true]);

        // Calculate the month and year for the filename
        $monthYear = $showCurrentDate ? now()->format('F Y') : now()->subMonth()->format('F Y');

        // Create filename
        $filename = "laporan_monitoring_website_" . str_replace(' ', '_', $monthYear) . ".pdf";

        // Set PDF options
        $pdf->setOptions(['title' => "Laporan Monitoring Website - $monthYear"]);
        $pdf->setOptions(['display_title' => true]);
        $pdf->setOptions(['filename' => $filename]);

        // Save the PDF to the public/laporan directory
        $pdfContent = $pdf->output();
        Storage::put("laporan_bulanan/$filename", $pdfContent);

        // Display success message
        $this->info("Monthly report generated and saved successfully: $filename");
    }
}
