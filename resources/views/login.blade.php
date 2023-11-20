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
        }
        .custom-container {
            width: 450px;
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
            <h2 class="card-title text-center">Login</h2>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <label for="forgotPassword">Lupa Password? <a href="#">Klik di sini</a></label>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
