<!DOCTYPE html>
<html>
<head>
    <title>View User Image</title>
</head>
<body>
    @if ($user->foto)
        <img src="{{ asset('storage/foto/' . $user->foto) }}" alt="User Image">
    @else
        <p>No Image Available</p>
    @endif
</body>
</html>
