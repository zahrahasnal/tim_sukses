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
            @foreach ($data as $key => $website)
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
            @endforeach
        </tbody>
    </table>
</body>
</html>
