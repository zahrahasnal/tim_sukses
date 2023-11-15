<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\Controller;
use App\Models\Website;


class PiechartController extends Controller
{
    public function index()
    {
        $kategoriData = Website::select('kategori')->get();
        $totalKategori = count($kategoriData);
        $kategoriCounts = $kategoriData->countBy(function ($item) {
            return $item->kategori;
        });
        $kategoriPercentages = [];
        foreach ($kategoriCounts as $kategori => $count) {
            $kategoriPercentages[$kategori] = ($count / $totalKategori) * 100;
        }

        $kdWhmData = Website::select('kd_whm')->get();
        $totalkdWhm = count($kdWhmData);
        $kdWhmCounts = $kdWhmData->countBy(function ($item) {
            return $item->kdWhm;
        });
        $kdWhmPercentages = [];
        foreach ($kdWhmCounts as $kdWhm => $count) {
            $kategoriPercentages[$kdWhm] = ($count / $totalkdWhm) * 100;
        }

        $statusData = Website::select('status')->get();
        $totalStatus = count($statusData);
        $statusCounts = $statusData->countBy(function ($item) {
            return $item->status;
        });
        $statusPercentages = [];
        foreach ($statusCounts as $status => $count) {
            $statusPercentages[$status] = ($count / $totalStatus) * 100;
        }

        $beritaData = Website::select('berita')->get();
        $totalBerita = count($beritaData);
        $beritaCounts = $beritaData->countBy(function ($item) {
            return $item->berita;
        });
        $beritaPercentages = [];
        foreach ($beritaCounts as $berita => $count) {
            $beritaPercentages[$berita] = ($count / $totalBerita) * 100;
        }

        $logoData = Website::select('logo')->get();
        $totalLogo = count($logoData);
        $logoCounts = $logoData->countBy(function ($item) {
            return $item->logo;
        });
        $logoPercentages = [];
        foreach ($logoCounts as $logo => $count) {
            $logoCounts[$logo] = ($count / $totalLogo) * 100;
        }

        $cmsData = Website::select('cms')->get();
        $totalCms = count($cmsData);
        $cmsCounts = $cmsData->countBy(function ($item) {
            return $item->cms;
        });
        $cmsPercentages = [];
        foreach ($cmsCounts as $cms => $count) {
            $cmsPercentages[$cms] = ($count / $totalCms) * 100;
        }
        
        $keamananData = Website::select('keamanan')->get();
        $totalKeamanan = count($keamananData);
        $keamananCounts = $keamananData->countBy(function ($item) {
            return $item->keamanan;
        });
        $keamananPercentages = [];
        foreach ($keamananCounts as $keamanan => $count) {
            $keamananCounts[$keamanan] = ($count / $totalKeamanan) * 100;
        }

        $errorData = Website::select('error')->get();
        $totalError = count($errorData);
        $errorCounts = $errorData->countBy(function ($item) {
            return $item->error;
        });
        $errorPercentages = [];
        foreach ($errorCounts as $error => $count) {
            $errorCounts[$error] = ($count / $totalError) * 100;
        }

        return view('admin.index', compact(
            'kategoriData',
            'kategoriPercentages',
            'kdWhmData',
            'kdWhmPercentages',
            'statusData',
            'statusPercentages',
            'beritaData',
            'beritaPercentages',
            'logoData',
            'logoPercentages',
            'cmsData',
            'cmsPercentages',
            'keamananData',
            'keamananPercentages',
            'errorData',
            'errorPercentages'
        ));
    }

}
