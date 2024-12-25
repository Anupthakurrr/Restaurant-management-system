<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            margin: 0;
            font-family: 'DM Sans', sans-serif;
            background-color: #f9f9f9;
        }
        .item-page {
            width: 80%;
            margin: auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(13, 231, 97, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .item-header {
            text-align: center;
            font-size: 36px;
            margin-bottom: 20px;
            color: #333;
        }
        .item-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            max-width: 1200px;
            gap: 20px;
        }
        .item-image {
            flex: 1;
        }
        .item-image img {
            width: 100%;
            max-width: 400px;
            height: auto;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }
        .item-image img:hover {
            transform: scale(1.05);
        }
        .item-details {
            flex: 1;
            padding-left: 20px;
        }
        .item-details h2 {
            font-size: 28px;
            color: #333;
            margin-bottom: 10px;
        }
        .item-details p {
            font-size: 18px;
            color: #666;
            margin-bottom: 20px;
            line-height: 1.6;
        }
        .item-details .price {
            font-size: 24px;
            font-weight: bold;
            color: #ad343e;
            margin-bottom: 20px;
        }
        .item-details .quantity,
        .item-details .customization {
            margin-bottom: 20px;
        }
        .item-details label {
            font-size: 16px;
            margin-right: 10px;
        }
        .item-details select {
            padding: 5px;
            font-size: 16px;
        }
        .item-details .add-to-cart,
        .item-details .wishlist-button {
            display: inline-block;
            padding: 12px 25px;
            font-size: 18px;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
            margin-top: 20px;
            text-decoration: none;
        }
        .item-details .add-to-cart {
            background-color: #ad343e;
        }
        .item-details .add-to-cart:hover {
            background-color: #ff4c5b;
            transform: scale(1.05);
            box-shadow: 0 0 25px rgba(255, 76, 91, 0.7);
        }
        .item-details .wishlist-button {
            background-color: #007bff;
        }
        .item-details .wishlist-button:hover {
            background-color: rgb(0, 86, 179);
            transform: scale(1.05);
            box-shadow: 0 0 25px rgba(2, 115, 244, 0.7);
        }
        .rating {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .rating .star {
            color: #ffd700;
            font-size: 24px;
        }
        @media (max-width: 768px) {
            .item-content {
                flex-direction: column;
                align-items: center;
            }
            .item-image img {
                width: 100%;
                height: auto;
                margin-bottom: 20px;
            }
            .item-details {
                padding-left: 0;
                text-align: center;
            }
        }
    </style>
</head>
<body>
</body>
</html>
