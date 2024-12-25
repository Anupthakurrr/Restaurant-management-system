<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Address Form</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" crossorigin="anonymous">
    <script src="{{ asset('css/bundle.js') }}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background: #e0e0e0;
            box-shadow: 20px 20px 64px #c1c1c1, -20px -20px 64px #ffffff;
        }
        .form-control {
            border-radius: 4px;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .invalid-feedback {
            display: block;
            font-size: 10px;
            color: #dc3545;
            font-weight: bold;
        }
    </style>
</head>
<body>
    @extends('layout')
    @section('content')
    <div class="container mt-5">
        <div class="form-container">
            <h2 class="text-center mb-4">Order Address Information</h2>
            <form action="{{ url('adds') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Full Name</label>
<br>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="John Doe" value="{{ old('name') }}" >

                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div><br>
                <div class="form-group">
                    <label for="email">Email Address</label>
<br>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="example@example.com" value="{{ old('email') }}" >

                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div><br>
                <div class="form-group">
                    <label for="contact">Contact Number</label>
<br>
                    <input type="tel" class="form-control @error('contact') is-invalid @enderror" id="contact" name="contact" placeholder="1234567890" value="{{ old('contact') }}" >

                    @error('contact')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div><br>
                <div class="form-group">
                    <label for="address">Street Address</label>
<br>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" placeholder="123 Main St" value="{{ old('address') }}" >

                    @error('address')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div><br>
                <div class="form-group">
                    <label for="message">Additional Message</label>
<br>
                    <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="3" placeholder="Any additional information or special requests">{{ old('message') }}</textarea>

                    @error('message')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <br>
                <button type="submit" class="btn btn-primary btn-block">Place Order</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @endsection
</body>
</html>
