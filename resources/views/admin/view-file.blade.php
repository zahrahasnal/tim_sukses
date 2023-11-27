<!-- resources/views/admin/view-file.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View PDF</title>
</head>
<body style="margin: 0; overflow: hidden;">
    <div style="width: 100%; height: 100vh;">
        <embed src="{{ asset("laporan_bulanan/{$filename}.pdf") }}" width="100%" height="100%" />
    </div>
</body>
</html>
