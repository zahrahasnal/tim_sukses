<?php

// app/Http/Controllers/ApiController.php

namespace App\Http\Controllers;

use App\Models\Website;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getChartData()
    {
        $data = Website::all();
        $columns = ['kategori', 'kd_whm', 'status', 'berita', 'logo', 'cms', 'keamanan', 'error'];
        $dataCounts = [];

        foreach ($columns as $column) {
            $dataCounts[$column] = $data->whereNotNull($column)->count();
        }

        $totalData = $data->count();
        $dataPercentages = [];

        foreach ($columns as $column) {
            $count = $dataCounts[$column];
            $dataPercentages[$column] = ($count / $totalData) * 100;
        }

        $chartData = [['Column', 'Count', 'Percentage']];

        foreach ($columns as $column) {
            $count = $dataCounts[$column];
            $percentage = $dataPercentages[$column];
            $chartData[] = [$column, $count, $percentage];
        }

        return response()->json($chartData);
    }
}
