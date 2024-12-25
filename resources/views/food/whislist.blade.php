<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .card img {
            border-radius: 10px 10px 0 0;
            height: 300px;
            object-fit: cover;
            width: 100%;
        }
        .card-body {
            padding: 20px;
        }
        .card-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 10px;
        }
        .card-text {
            font-size: 1rem;
            color: #6c757d;
            margin-bottom: 20px;
        }
        .btn-primary, .btn-secondary {
            border-radius: 5px;
            padding: 10px 15px;
            font-size: 1rem;
        }
        .btn-primary {
            background-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-secondary {
            background-color: #6c757d;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>
    @extends('layout') <!-- Assuming 'layout' is the base layout file -->
    @section('content')
    <div class="container">
        <h2 class="text-center mb-4">Your Wishlist</h2>

        @if($wish && count($wish) > 0)
            <div class="row">
                @foreach($wish as $id => $item)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="{{ asset('products/' . $item['product_pic']) }}" class="card-img-top" alt="{{ $item['name'] }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item['name'] }}</h5>
                                <p class="card-text">{{ $item['description'] }}</p>
                                <div class="price">NRS {{ $item['price'] }}</div>

                                <form action="{{ url('/cart/add/' . $id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    <label for="quantity">Quantity:</label>
                                    <select id="quantity" name="quantity">
                                        @for($i = 1; $i <= 5; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select><br><br>
                                    <button type="submit" class="btn btn-primary">Add to Cart</button>
                                </form>

                                <form action="{{ url('/wishlist/remove/' . $id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE') <!-- Simulate DELETE request -->
                                    <button type="submit" class="btn btn-secondary">Remove from Wishlist</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center">Your wishlist is empty!</p>
        @endif
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @endsection
</body>
</html>
