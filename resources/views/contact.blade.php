<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us - Restaurant</title>
    <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Arial', sans-serif;
        }
        .contact {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 60px 20px;
        }
        .contact h2 {
            font-size: 34px;
            margin-bottom: 30px;
            color: #222;
            font-family: 'Playfair Display', serif;
            font-weight: bold;
        }
        #box {
            width: 100%;
            max-width: 700px;
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
        #message {
            resize: none;
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
    </style>
</head>
<body>
    @extends('layout')
    @section('content')
    <div class="contact">
        <div id="box">
            <h2>Contact Us</h2>
            <form action="{{ url('/contactus') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                    <span style="color: red">@error('name') {{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                    <span style="color: red">@error('email') {{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Your Phone Number">
                    <span style="color: red">@error('phone') {{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="4" placeholder="Your Message"></textarea>
                    <span style="color: red">@error('message') {{ $message }} @enderror</span>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </div>
    @endsection
</body>
</html>
