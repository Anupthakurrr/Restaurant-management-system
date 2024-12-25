<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Menu</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $('a[href^="#"]').on('click', function(e){
                e.preventDefault();
                var target = $(this.hash);
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                }
            });

            setInterval(function() {
                $("#logo").fadeToggle(1000);
            }, 2000);
        });
    </script>
    <style>
        body {
            margin: 0;
            font-family: 'DM Sans', sans-serif;
            background-color: #f9f9f9;
        }
        .page {
            width: 100%;
            padding: 50px 0;
            background-color: #f9f9f9;
        }
        #our {
            text-align: center;
            font-size: 60px;
            font-family: 'Playfair Display', serif;
            margin-bottom: 10px;
            color: #333;
        }
        #your {
            text-align: center;
            font-size: 18px;
            font-family: 'DM Sans', sans-serif;
            color: #666;
            margin-bottom: 40px;
        }
        .maind {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 0 20px;
        }
        .item-box {
            width: calc(25% - 20px);
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
            padding: 20px;
            box-sizing: border-box;
            border-radius: 10px;
            overflow: hidden;
        }
        .item-box img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-bottom: 1px solid #eee;
            transition: transform 0.3s ease;
        }
        .item-box:hover img {
            transform: scale(1.1);
        }
        .item-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .item-box .price {
            font-size: 24px;
            font-family: 'DM Sans', sans-serif;
            font-weight: bold;
            color: #ad343e;
            margin: 10px 0;
        }
        .item-box .description {
            font-size: 20px;
            font-family: 'DM Sans', sans-serif;
            font-weight: bold;
            margin: 10px 0;
            color: #333;
        }
        .item-box .ingredients {
            font-size: 16px;
            font-family: 'DM Sans', sans-serif;
            margin: 10px 0;
            color: #666;
        }
        .item-box .add-to-cart {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-family: 'DM Sans', sans-serif;
            color: #fff;
            background-color: #ad343e;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none; /* Remove underline for links */
            transition: background-color 0.3s ease, transform 0.3s ease;
            margin-top: 10px;
        }
        .item-box .add-to-cart:hover {
            background-color: #ff4c5b;
            transform: scale(1.05);
        }
        .back-to-top {
            display: block;
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: #ad343e;
            color: white;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            text-align: center;
            line-height: 50px;
            font-size: 30px;
            text-decoration: none;
            transition: background 0.3s ease;
        }
        .back-to-top:hover {
            background: #ff4c5b;
        }

        @media (max-width: 480px) {
            #our {
                font-size: 36px; /* Adjust font size for mobile screens */
            }
            #your {
                font-size: 16px; /* Adjust font size for mobile screens */
            }
            .maind {
                padding: 10px; /* Adjust padding for mobile screens */
            }
            .item-box {
                width: 100%; /* Make item boxes full width on mobile screens */
                margin-bottom: 20px; /* Add space between item boxes */
            }
            .item-box img {
                height: 200px; /* Adjust image height for mobile screens */
            }
            .item-box .price {
                font-size: 20px; /* Adjust font size for mobile screens */
            }
            .item-box .description {
                font-size: 16px; /* Adjust font size for mobile screens */
            }
            .item-box .ingredients {
                font-size: 14px; /* Adjust font size for mobile screens */
            }
            .item-box .add-to-cart {
                font-size: 14px; /* Adjust font size for mobile screens */
                padding: 8px 16px; /* Adjust padding for mobile screens */
            }
            .back-to-top {
                width: 40px; /* Adjust width for mobile screens */
                height: 40px; /* Adjust height for mobile screens */
                line-height: 40px; /* Adjust line height for mobile screens */
                font-size: 24px; /* Adjust font size for mobile screens */
            }
            .original-price {
                text-decoration: line-through;
                color: #999;
                font-size: 10px; /* Smaller font size for the original price */
            }

        }
    </style>
</head>
<body>
    @extends('layout')
    @section('content')
    <div class="page">
        <p id="our">Our Menu</p>
        <p id="your">
            We consider that you are paying money to us then it’s our responsibility to provide you authentic food with real taste
            “ATITHI DEVO BHAW”
        </p>

        <div class="search-filter-container" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 50px; padding: 0 50px;">
            <form action="{{ url('/menu/search') }}" method="GET" style="flex: 1; margin-right: 20px;">
                <input type="text" name="query" placeholder="Search for food items..." required style="padding: 10px; width: 50%; border-radius: 5px;">
                <button type="submit" style="padding: 10px; background-color: #ad343e; color: white; border: none; border-radius: 5px; margin-top: 10px;">Search</button>
            </form>

            <form action="{{ route('menu.sort') }}" method="GET" style="flex: 1;">
                <select name="order" onchange="this.form.submit()" style="padding: 10px; width: 30%; border-radius: 5px; margin-left:350px;">
                    <option value="asc" {{ request('order') == 'asc' ? 'selected' : '' }}>Low to High</option>
                    <option value="desc" {{ request('order') == 'desc' ? 'selected' : '' }}>High to Low</option>
                </select>
            </form>
        </div>


        <div class="maind">
            @if($menuItems->isEmpty())
                <p>No items found matching your search.</p>
            @else
                @foreach($menuItems as $item)
                    <div class="item-box">
                        <img src="{{ asset('products/' . $item->product_pic) }}" alt="{{ $item->name }}">
                        <div class="description">{{ $item->name }}</div>

                        @php
                            // Calculate the discounted price if a discount exists
                            $discountedPrice = $item->discount ? $item->price * (1 - $item->discount / 100) : $item->price;
                        @endphp

                        @if($item->discount)
                            <div class="discount-badge" style="font-weight: bold; color: #ff4c5b;">{{ $item->discount }}% Off</div>
                        @endif

                        <div class="price">
                            @if($item->discount)
                                <span class="original-price" style="text-decoration: line-through; color: #999; font-size: 14px;">NRS {{ $item->price }}</span> <!-- Original Price -->
                                <strong style="color: #ad343e;">NRS {{ number_format($discountedPrice, 2) }}</strong> <!-- Discounted Price -->
                            @else
                                NRS {{ $item->price }}
                            @endif
                        </div>

                        <div class="ingredients">{{ $item->ingredients }}</div>
                        <a href="{{ url('/food/cart/' . $item->id) }}" class="add-to-cart">Add to Cart</a>
                    </div>
                @endforeach
            @endif
        </div>





        <a href="#" class="back-to-top">&#8593;</a> <!-- Back to top button -->
    </div>
    @endsection
</body>
</html>
