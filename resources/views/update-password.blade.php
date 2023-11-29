<!-- resources/views/update-password.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Password</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container custom-container">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title text-center">Reset Password</h2>
                <form action="{{  route('update-password.post') }}" method="POST">
                    @csrf
                    <input type="hidden" name="token" value="{{ $resetToken }}">
                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="New Password" required>
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-block">Update Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
