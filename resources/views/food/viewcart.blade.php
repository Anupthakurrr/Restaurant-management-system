<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your Cart</title>
    <style>
        .cart-page {
            width: 80%;
            margin: 0 auto;
        }

        .cart-table {
            width: 100%;
            border-collapse: collapse;
        }

        .cart-table th, .cart-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .cart-table th {
            background-color: #f4f4f4;
        }

        .cart-table img {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }

        .cart-summary {
            text-align: right;
            margin-top: 20px;
        }

        .checkout-button {
            box-shadow: 0 0 5px cyan,0 0 25px cyan;
            color: black;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        .checkout-button:hover {
            box-shadow: 0 0 5px cyan,
            0 0 25px cyan, 0 0 50px cyan,
            0 0 100px cyan, 0 0 200px cyan;

            background: cyan;
     }
    </style>
</head>
<body>
    @extends('layout')

    @section('content')
    <div class="cart-page">
        <h1>Your Cart</h1>
        <table class="cart-table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $totalPrice = 0;
                @endphp
                @foreach($cart as $id => $item)
                <tr>
                    <td>
                        <img src="{{ asset('products/' . $item['image']) }}" alt="{{ $item['name'] }}">
                        <span>{{ $item['name'] }}</span>
                    </td>
                    <td>{{ $item['quantity'] }}</td>
                    <td>NRS {{ $item['price'] }}</td>
                    <td>NRS {{ $item['price'] * $item['quantity'] }}</td>
                    <td>
                        @if($item['stock'] == 0)
                            <span style="color: red;">Out of Stock</span>
                        @elseif($item['stock'] < 5)
                            <span style="color: orange;">Limited Stock: Only {{ $item['stock'] }} left</span>
                        @else
                            <span style="color: green;">In Stock</span>
                        @endif
                    </td>
                </tr>
                @php
                    // Add to total price
                    $totalPrice += $item['price'] * $item['quantity'];
                @endphp
                @endforeach
            </tbody>
        </table>

        <div class="cart-summary">
            <h3>Total: NRS {{ $totalPrice }}</h3>
            <br>
            <a href="{{ url('/checkout') }}" class="checkout-button">Proceed to Checkout</a>
        </div>
        <br>
    </div>
    @endsection
</body>
</html>
