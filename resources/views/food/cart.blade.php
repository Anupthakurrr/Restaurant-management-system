<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $menuItem->name }} - Gujrati Thali</title>
</head>
<body>
    @extends('layout')
    @extends('food.layouts')
    @section('content')
    <div class="item-page">
        <div class="item-content">
            <div class="item-image">
                <img src="{{ asset('products/' . $menuItem->product_pic) }}" alt="{{ $menuItem->name }}">
            </div>
            <div class="item-details">
                <div class="rating">
                    @for($i = 0; $i < 5; $i++)
                        @if($i < $menuItem->rating)
                            <span class="star">&#9733;</span>
                        @else
                            <span class="star">&#9734;</span>
                        @endif
                    @endfor
                </div>
                <h2>{{ $menuItem->name }}</h2>
                <p>{{ $menuItem->description }}</p>
                <div class="price">NRS {{ $menuItem->price }}</div>

                <form action="{{ url('/cart/add/' . $menuItem->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    <label for="quantity">Quantity:</label>
                    <select id="quantity" name="quantity">
                        @for($i = 1; $i <= 5; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select><br><br>
                    <button type="submit" class="add-to-cart">Add to Cart</button>
                </form>

                <form action="{{ url('/wishlist/add/' . $menuItem->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    <button type="submit" class="wishlist-button">Add to Wishlist</button>
                </form>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>
