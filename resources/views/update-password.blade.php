<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0; /* Menghilangkan margin bawaan body */
        }

        .custom-container {
            width: 450px;
        }

        .card {
            /* Menengahkan card dengan Flexbox */
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .input-group {
            position: relative;
        }

        .input-group img {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            width: 25px;
            cursor: pointer;
        }
    </style>
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
                        <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
