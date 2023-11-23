<!DOCTYPE html>
<html>
<head>
    <title>Laporan Monitoring Website</title>
    <style>
        /* Atur gaya CSS sesuai kebutuhan Anda */
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    @php
        $monthName = now()->format('F'); // Get the month name
    @endphp

    @foreach ($data as $key => $website)
        <!-- Check if it's the first row to display the title and date -->
        @if ($key == 0)
            <div style="text-align: center; margin-bottom: 20px;">
                <h1>Rekap Monitoring Website</h1>
                <h2>Bulan {{ $monthName }}</h2>
                <h3>{{ now()->toDateString() }}</h3>
            </div>

            <!-- Table header -->
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Website</th>
                        <th>kategori</th>
                        <th>Kode WHM</th>
                        <th>status</th>
                        <th>Tgl Pemantauan</th>
                        <th>Tgl Last Update</th>
                        <th>Berita</th>
                        <th>Logo</th>
                        <th>CMS</th>
                        <th>Keamanan</th>
                        <th>Error</th>
                        <th>Keterangan Error</th>
                    </tr>
                </thead>
                <tbody>
        @endif

        <!-- Your existing table row code goes here -->
        <tr>
            <td>{{ $key + 1 }}</td>
            <td><a href="{{ $website->link }}">{{ $website->link }}</a></td>
            <td>{{ $website->kategori }}</td>
            <td>{{ $website->kd_whm }}</td>
            <td>{{ $website->status }}</td>
            <td>{{ $website->tgl_pemantauan }}</td>
            <td>{{ $website->tgl_last_update }}</td>
            <td>{{ $website->berita }}</td>
            <td>{{ $website->logo }}</td>
            <td>{{ $website->cms }}</td>
            <td>{{ $website->keamanan }}</td>
            <td>{{ $website->error }}</td>
            <td>{{ $website->ket_error }}</td>
        </tr>

        <!-- Check if it's the last row to close the table -->
        @if ($loop->last)
                </tbody>
            </table>
        @endif
    @endforeach
</body>

</html>
