<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <title>Sneakers Registration</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/app.css">
    <link rel="stylesheet" href="/public/css/main.css">
</head>

<body>
<div class="container">
    <h1>Register</h1>
    <div class="add">
        <form class="addUser" action="{{ route('register') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" value="{{ old('name') }}" id="name">
                @error('name')
                <div class="inline_error" style="color: red; font-size: small">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" value="{{ old('email') }}" id="email" placeholder="emial@smth.com">
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
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" name="password_confirmation" id="password_confirmation">
            </div>

{{--            <div class="form-group">--}}
{{--                <label for="phoneNumber">Phone number:</label>--}}
{{--                <input type="phoneNumber" name="phoneNumber" value="{{ old('phoneNumber') }}" id="phoneNumber" placeholder="9989xxyyyyyyy">--}}
{{--                @error('phoneNumber')--}}
{{--                <div class="inline_error" style="color: red; font-size: small">{{ $message }}</div>--}}
{{--                @enderror--}}
{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <label for="postalCode">Postal code:</label>--}}
{{--                <input type="postalCode" name="postalCode" value="{{ old('postalCode') }}" id="postalCode"  placeholder="1234567">--}}
{{--                @error('postalCode')--}}
{{--                <div class="inline_error" style="color: red; font-size: small">{{ $message }}</div>--}}
{{--                @enderror--}}
{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <label for="cityName">City name:</label>--}}
{{--                <input type="cityName" name="cityName" value="{{ old('cityName') }}" id="cityName">--}}
{{--                @error('cityName')--}}
{{--                <div class="inline_error" style="color: red; font-size: small">{{ $message }}</div>--}}
{{--                @enderror--}}
{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <label for="dateOfBirth">Date of birth:</label>--}}
{{--                <input type="dateOfBirth" name="dateOfBirth" value="{{ old('dateOfBirth') }}" id="dateOfBirth"  placeholder="yyyy-mm-dd">--}}
{{--                @error('dateOfBirth')--}}
{{--                <div class="inline_error" style="color: red; font-size: small">{{ $message }}</div>--}}
{{--                @enderror--}}
{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <label for="passportNumber">Passport number:</label>--}}
{{--                <input type="passportNumber" name="passportNumber" value="{{ old('passportNumber') }}" id="passportNumber" placeholder="aa1234567">--}}
{{--                @error('passportNumber')--}}
{{--                <div class="inline_error" style="color: red; font-size: small">{{ $message }}</div>--}}
{{--                @enderror--}}
{{--            </div>--}}

            <div class="form-group">
                <input type="submit" value="Register">
                <a href="{{ route('login') }}">Login</a>
            </div>

        </form>
    </div>
</div>
</body>
