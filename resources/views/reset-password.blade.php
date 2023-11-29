<!-- resources/views/emails/reset-password.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>
<body>
    <p>Klik link dibawah ini untuk mereset password Anda:</p>
    <a href="{{ route('update-password', ['token' => $resetToken]) }}">Reset Password</a>
    <p>Link ini akan berlaku selama 24 jam.</p>
    <p>Jika Anda tidak mereset password, abaikan email ini.</p>
</body>
</html>
