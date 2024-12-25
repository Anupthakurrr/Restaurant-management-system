<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Arial', sans-serif;
        }
        .auth-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 60px 20px;
            min-height: 100vh;
        }
        .auth-container h2 {
            font-size: 34px;
            margin-bottom: 30px;
            color: #222;
            font-family: 'Playfair Display', serif;
            font-weight: bold;
        }
        .auth-box {
            width: 100%;
            max-width: 500px;
            background-color: #ffffff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            padding: 40px;
            overflow: hidden;
            border: 1px solid #ddd;
        }
        label {
            font-size: 18px;
            font-family: 'DM Sans', sans-serif;
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
        }
        .form-control {
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        .form-control:focus {
            border-color: #ff6f61;
            box-shadow: 0 0 8px rgba(255, 111, 97, 0.4);
        }
        .btn-primary {
            background-color: #ff6f61;
            border: none;
            border-radius: 8px;
            padding: 12px 20px;
            font-size: 18px;
            transition: background-color 0.3s, box-shadow 0.3s;
        }
        .btn-primary:hover {
            background-color: #ff3b2f;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }
        .form-group {
            margin-bottom: 20px;
        }
        .auth-container .link {
            text-align: center;
            margin-top: 20px;
        }
        .auth-container .link a {
            color: #ff6f61;
            text-decoration: none;
        }
        .auth-container .link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    @extends('layout')
    @section('content')
    <div class="auth-container">
        <div class="auth-box">
            <h2>Login</h2>
            <form action="{{ url('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" value="{{ old('email') }}" >
                    <span style="color: red">@error('email') {{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Your Password" >
                    <span style="color: red">@error('password') {{ $message }} @enderror</span>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <div class="link">
                    <p>Don't have an account? <a href="{{ url('/signup') }}">Sign Up</a></p>
                     <p><a href="{{ url('/forgot') }}">Forgot Password?</a></p>
                </div>
            </form>
            </div>
    </div>
    @endsection
</body>
</html>
