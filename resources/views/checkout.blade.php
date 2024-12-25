<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        .payment-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 100%;
            max-width: 500px;
            text-align: center;
            position: relative;
            left: 50%;
            transform: translate(-50%);
        }

        h1 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .thank-you-message {
            color: green;
            font-size: 18px;
            margin-bottom: 20px;
            display: none;
        }

        .total-amount {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .payment-methods {
            display: flex;
            justify-content: space-around;
            margin-bottom: 30px;
        }

        .payment-methods button {
            background-color: #008CBA;
            color: white;
            border: none;
            padding: 15px 20px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }

        .payment-methods button:hover {
            background-color: #007B9E;
        }

        .pay-now-btn {
            display: inline-block;
            background-color: #28a745;
            color: white;
            padding: 12px 24px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 18px;
            cursor: pointer;
        }

        .pay-now-btn:hover {
            background-color: #218838;
        }

        .checkout-summary {
            border-top: 1px solid #ddd;
            padding-top: 20px;
            margin-top: 20px;
        }

        .checkout-summary h3 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    @extends('layout')

    @section('title', 'Checkout Payment')

    @section('content')
        <div class="payment-container">
            <h1>Payment</h1>

            <!-- Thank you message -->
            <div class="thank-you-message" id="thankYouMessage">
                <p>Thank you! Your payment has been successfully processed.</p>
            </div>

            <!-- Total Price -->
            <div class="total-amount">
                Total: NRS {{ $totalPrice }}
            </div>

            <!-- Payment Methods -->
            <div class="payment-methods">
                <button>Cash on Delivery</button>
            </div>

            <!-- Pay Now Button -->
            <a href="#" class="pay-now-btn" id="payNowBtn">Pay Now</a>

            <!-- Checkout Summary -->
            <div class="checkout-summary">
                <h3>Order Summary</h3>
                <p>Your products will be delivered within 3-5 days.</p>
            </div>
        </div>

        <script>
            document.getElementById('payNowBtn').addEventListener('click', function(event) {
                event.preventDefault();

                // Simulate payment processing
                setTimeout(function() {
                    // Show thank you message
                    document.getElementById('thankYouMessage').style.display = 'block';
                }, 1000);
            });
        </script>
    @endsection

</body>
</html>
