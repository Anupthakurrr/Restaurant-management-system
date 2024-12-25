<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Five Star Dining Experience</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        .three {
            background-color: #f5f5f5;
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            padding: 0 20px;
            flex-direction: row; /* Ensure row direction on larger screens */
        }

        .image111 img {
            width: 70%;
            max-width: 700px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            animation: fadeIn 2s ease-out;
        }

        .desc {
            position: absolute;
            right: 5%;
            max-width: 35%;
            color: #333;
            animation: slideInRight 1.5s ease-out;
            z-index: 1; /* Ensure text is above other elements */
        }

        #big {
            font-size: 3.5em;
            font-family: 'Playfair Display', serif;
            font-weight: bold;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        #medium {
            font-size: 1.2em;
            margin-bottom: 20px;
        }

        #small {
            font-size: 1em;
            color: #666;
        }

        .cutting {
            background-color: #fff;
            padding: 50px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow: hidden;
            flex-direction: row; /* Ensure row direction on larger screens */
        }

        #veg img {
            width: 100%;
            max-width: 600px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            animation: scaleUp 2s ease-out;
        }

        .panch {
            max-width: 600px;
            margin-left: 20px;
            text-align: center;
            animation: slideInRight 2.5s ease-out;
            z-index: 1; /* Ensure text is above other elements */

        }

        #cut1 {
            font-size: 2.5em;
            font-family: 'Playfair Display', serif;
            color: #333;
            margin-bottom: 20px;
            line-height: 1.3;
        }

        #cutt1 {
            font-family: 'DM Sans', sans-serif;
            font-size: 1.2em;
            color: #555;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideInRight {
            from { transform: translateX(100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        @keyframes scaleUp {
            from { transform: scale(0.9); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        @media (max-width: 480px) {
            .three {
                height: auto; /* Allow height to adjust based on content */
                flex-direction: column; /* Stack items vertically on smaller screens */
                padding: 20px;
            }

            .image111 img {
                width: 100%; /* Make image full width */
                max-width: none; /* Remove max-width restriction */
                height: auto; /* Adjust height proportionally */
            }

            .desc {
                position: static; /* Remove absolute positioning */
                max-width: 100%; /* Allow full width */
                text-align: center; /* Center text */
                margin-top: 20px; /* Add space above */
                padding: 0 20px; /* Add padding to prevent text from touching edges */
            }

            #big {
                font-size: 2em; /* Adjust font size for smaller screens */
            }

            #medium {
                font-size: 1.2em;
            }

            #small {
                font-size: 1em;
            }

            .cutting {
                padding: 20px;
                flex-direction: column; /* Stack items vertically on smaller screens */
            }

            #veg img {
                width: 100%; /* Make image full width */
                max-width: none; /* Remove max-width restriction */
                height: auto; /* Adjust height proportionally */
            }

            .panch {
                margin-left: 0; /* Remove left margin */
                text-align: center; /* Center text */
            }

            #cut1 {
                font-size: 2em; /* Adjust font size for smaller screens */
            }

            #cutt1 {
                font-size: 1em;
            }
        }

    </style>
</head>
<body>
    @extends('layout')
    @section('content')
    <div class="three">
        <div class="image111">
            <img src="{{ asset('images/image.png') }}" alt="Healthy Dining Experience">
        </div>
        <div class="desc">
            <div id="big"><p>Experience Exquisite Dining<br> Like Never Before</p></div>
            <div id="medium"><p>At [EZZE EATS], we redefine fine dining with a blend of culinary artistry, impeccable service, and an ambiance that exudes sophistication. Our menu, crafted from the finest local and international ingredients, promises an unforgettable gastronomic journey.</p></div>
            <div id="small"><p>Our commitment to excellence ensures that every visit is a celebration of taste and elegance. From our dedicated staff to our luxurious settings, we strive to make each moment extraordinary. Join us and indulge in a dining experience that transcends the ordinary.</p></div>
        </div>
    </div>

    <div class="cutting">
        <div id="veg">
            <img src="{{ asset('images/mask group (3).png') }}" alt="Restaurant Interior">
        </div>
        <div class="panch">
            <div id="cut1">
                <p>Exclusive Insights for Our Valued Guests</p>
            </div>
            <div id="cutt1">
                <p>At [EZZE EATS], we believe that dining is more than just a meal; it’s a journey through exceptional flavors and unparalleled hospitality. Our team is dedicated to creating memorable experiences that leave a lasting impression. Discover a world of luxury and indulgence with us.</p>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>
