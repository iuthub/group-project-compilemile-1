<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <title>Sneakers Login</title>

    <link rel="icon" href="img/trainers.png" type="image/png" sizes="16x16">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/app.css">
    <link rel="stylesheet" href="/public/css/main.css">
</head>

<body>
<div class="container">
    <h1>Login</h1>
    <div class="add">
        <form class="addUser" action="{{ route('login') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" value="{{ old('email') }}" id="email">
                @error('email')
                <div class="inline_error" style="color: red; font-size: small">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" value="{{ old('password') }}" id="password">
                @error('password')
                <div class="inline_error" style="color: red; font-size: small">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <input type="submit" value="Login">
                <a href="{{ route('register') }}">Register</a>
            </div>

        </form>
    </div>
</div>
</body>
