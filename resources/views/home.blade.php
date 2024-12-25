<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.image111 img').hide().fadeIn(6000);
        });
        $(document).ready(function(){
            $('.social img').hover(function(){
                $(this).css('opacity', '0.7');
            }, function(){
                $(this).css('opacity', '1');
            });
        });
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
        });
        setInterval(function() {
            $("#logo").fadeToggle(1000);
        }, 2000);
    </script>
    <style>
        *
        {
            box-sizing: border-box;
        }
        #background-image {
            background-image: url('images/her.png.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 100vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        #main1
        {
          font-family: 'DM Sans', sans-serif;
          font-size: 100px;
          text-align: center;
        }
        #main
        {
          font-family: 'DM Sans', sans-serif;
          font-size: 100px;
          text-align: center;
        }
        #main2
        {
            font-family: 'DM Sans', sans-serif;
            font-size: 20px;
            text-align: center;
        }
        .two{
            list-style: none;
        }
        .two li{
            display: inline-block;
        }
        .two li a{
            text-decoration: none;
            font-family: 'DM Sans', sans-serif;
            font-size: x-large;
            padding: 10px;
            border-radius: 15px;
            transition: all 0.3s ease;
            border: 1px solid black;
        }
        .two li a:hover{
            background: rgb(7, 1, 6);
            color: white;
            border: 1px solid black;
        }
        .detail
        {
            background-color: rgb(96, 92, 178);
        }
        .two{
            text-align: center;
            margin-top: 20px;
        }
        .roti{
            height: 856px;
            width: 100%;
        }
        .detail{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            min-height: 150px;
        }
        .three
        {
            background-color: rgb(249, 249, 247);
            width: 100%;
            height: 856px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .image111
        {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .desc{
            flex: 1;
            font-family: 'Playfair Display', serif;
            text-align: left;
            padding: 50px;
        }
        #big{
            font-size: 55px;
            margin-bottom: 20px;
        }
        #medium
        {
            font-size: 18px;
            margin-bottom: 20px;
        }
        #small
        {
            font-size: 16px;
            margin-bottom: 20px;
        }
        #us
        {
            display: inline-block;
            margin-top: 20px;
        }
        .glow-button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            color: white;
            text-decoration: none;
            background-color: #121012c8;
            border-radius: 5px;
            box-shadow: 0 0 20px rgba(45, 44, 45, 0);
            transition: box-shadow 0.3s ease-in-out;
        }
        .glow-button:hover {
            box-shadow: 0 0 30px rgba(5, 0, 4, 0.993);
        }
        #cart
        {
            width: 100%;
            height: 655px;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1em;

        }
        #uni{
            font-family: 'Playfair Display', serif;
            font-size: 55px;
            position: absolute;
            margin-left: 250px;
            margin-top: 30px;

        }
        #cart1
        {
            position: absolute;
            margin-top: 400px;
            margin-right: 1000px;
            display: inline-block;
            font-size: 24px;
            font-weight: bold;

        }
        #bird1
        {
            position: absolute;
            margin-top: 400px;
            margin-right: 350px;
            display: inline-block;
            font-size: 24px;
            font-weight: bold;
        }
        #wed1
        {
            display: inline-block;
            position: absolute;
            margin-top: 400px;
            margin-left: 300px;
            font-size: 24px;
            font-weight: bold;
        }
        #event1
        {
            display: inline-block;
            position: absolute;
            margin-top: 400px;
            margin-left: 980px;
            font-size: 24px;
            font-weight: bold;
        }
        .time
        {
            width: 100%;
            height: 841px;
            background-color: white;
            display: inline-block;
        }

        #fastest
        {
            font-family: 'Playfair Display', serif;
            font-size: 55px;
        }
        #iconr
        {
            font-family: 'DM Sans', sans-serif;
            font-size: 20px;
            font-weight: medium;
        }
        #party{
            border-radius: 50px;
            background: #383333;
            box-shadow: inset 20px 20px 60px #302b2b,
            inset -20px -20px 60px #403b3b;}
            html, body {
                overflow-x: hidden;
            }
            .container {
                display: flex;
                align-items: center; /* Center items vertically */
                padding: 20px;
                max-width: 100%; /* Adjust based on your design */
                justify-content: space-between;
            }

            #chef {
                 height:800px ;
                 width: 500px;
            }

            #fast {
color: #06d7ea;
font-size: 50px;
            }

            .text-section p {
                font-size: 45px; /* Adjust font size as needed */
                margin-bottom: 10px;
            }

            .text-section .icon-text {
                display: flex;
                align-items: center; /* Align items vertically */
                margin-bottom: 10px;
            }

            .text-section .icon-text img {
                width: 34px; /* Size of icons */
                height: 34px; /* Size of icons */
                margin-right: 10px; /* Space between icon and text */
            }

  @media (max-width: 991px)
{
    #background-image {
        background-image: url('images/her.png.png');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        height: 100vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }
    #main1
    {
      font-family: 'DM Sans', sans-serif;
      font-size: 80px;
      text-align: center;
    }
    #main
    {
      font-family: 'DM Sans', sans-serif;
      font-size: 80px;
      text-align: center;
    }
    #main2
    {
        font-family: 'DM Sans', sans-serif;
        font-size: 18px;
        text-align: center;
    }
    .two{
        list-style: none;
    }
    .two li{
        display: inline-block;
    }
    .two li a{
        text-decoration: none;
        font-family: 'DM Sans', sans-serif;
        font-size:20px;
        padding: 10px;
        border-radius: 15px;
        transition: all 0.3s ease;
        border: 1px solid black;
    }
    .two li a:hover{
        background: rgb(236, 8, 8);
        color: white;
        border: 1px solid black;
    }
    .detail
    {
        background-color: rgb(96, 92, 178);
    }
    .two{
        text-align: center;
        margin-top: 20px;
    }
    .roti{
        height: 856px;
        width: 100%;
    }
    .detail{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        min-height: 150px;
    }
    .three
    {
        background-color: rgb(249, 249, 247);
        width: 100%;
        height: 856px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .image111
    {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .image111 img{
      height:450px ;
      width:450px ;
    }
    .desc{
        flex: 1;
        font-family: 'Playfair Display', serif;
        text-align: left;
        padding: 30px;
    }
    #big{
        font-size: 40px;
        margin-bottom: 20px;
    }
    #medium
    {
        font-size: 18px;
        margin-bottom: 20px;
    }
    #small
    {
        font-size: 16px;
        margin-bottom: 20px;
    }
    #us
    {
        display: inline-block;
        margin-top: 20px;
    }
    .glow-button {
        background: #007bff;
        border: none;
        padding: 12px 24px;
        color: #fff;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 18px;
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
    }

    .glow-button:hover {
        background: #0056b3;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
    }
     #cart
    {
        width: 100%;
        height: 500px;
        background-color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 1em;

    }
    #uni{
        font-family: 'Playfair Display', serif;
        font-size: 40px;
        position: absolute;
        margin-left: 120px;
        margin-top: 30px;

    }
    #party{
        height:230px ;
        width:230px ;
    }
    #cart1
    {
        position: absolute;
        margin-top: 300px;
        margin-right: 750px;
        display: inline-block;
        font-size: 20px;
        font-weight: bold;

    }
    #bird1
    {
        position: absolute;
        margin-top: 300px;
        margin-right: 250px;
        display: inline-block;
        font-size: 20px;
        font-weight: bold;
    }
    #wed1
    {
        display: inline-block;
        position: absolute;
        margin-top: 300px;
        margin-left: 240px;
        font-size: 20px;
        font-weight: bold;
    }
    #event1
    {
        display: inline-block;
        position: absolute;
        margin-top: 300px;
        margin-left: 750px;
        font-size: 20px;
        font-weight: bold;
    }
    .time
    {
        width: 100%;
        height: 450px;
        background-color: white;
        display: inline-block;
    }
    #fastest
    {
        font-family: 'Playfair Display', serif;
        font-size: 40px;
    }
    #iconr
    {
        font-family: 'DM Sans', sans-serif;
        font-size: 20px;
        font-weight: medium;
    }
    .flex
    {
        display: inline-block;
        position: absolute;
        margin-top: 70px;
        margin-left: 200px;
    }
    #man1
    {   height: 600px;
        width: 300px;
        display: inline-block;
        position: absolute;
    }
    #man1 img{
        height: 500px;
        width: 300px;
    }
    #man2
    {
        display: inline-block;
        position: absolute;
        margin-left: 310px;
        margin-top: 50px;
    }
    #man2 img{
        height: 230px;
        width:140px ;
    }
    #man3
    {
        display: inline-block;
        position: relative;
        margin-top: 295px;
        margin-left: 310px;
    }
    #man3 img{
        height: 200px;
        width:140px ;
    }
    #red
    {
        display: inline-block;
        position: relative;
        margin-right: 1000px;
        margin-bottom: 10px;
    }
    #party{
        border-radius: 50px;
        background: #383333;
        box-shadow: inset 20px 20px 60px #302b2b,
        inset -20px -20px 60px #403b3b;}
        html, body {
            overflow-x: hidden;
        }
}
@media (max-width: 480px)
{
    #background-image {
        background-image: url('images/her.png.png');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        height: 300px;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }
    #main1
    {
      font-family: 'DM Sans', sans-serif;
      font-size: 30px;
      text-align: center;
    }
    #main
    {
      font-family: 'DM Sans', sans-serif;
      font-size: 30px;
      text-align: center;
    }
    #main2
    {
        font-family: 'DM Sans', sans-serif;
        font-size: 9px;
        text-align: center;
    }
    .two{
        list-style: none;
    }
    .two li{
        display: inline-block;

    }
    .two li a{
        text-decoration: none;
        font-family: 'DM Sans', sans-serif;
        font-size:8px;
        padding: 8px;
        border-radius: 10px;
        transition: all 0.3s ease;
        border: 1px solid black;
    }

    .two li a:hover{
        background: rgb(197, 87, 87);
        color: white;
        border: 1px solid black;
    }
    .detail
    {
        background-color: rgb(96, 92, 178);
    }
    .two{
         text-align: center;
         margin-right: 30px;
    }
    .detail{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        min-height: 150px;
    }
    .three
    {
        background-color: rgb(249, 249, 247);
        width: 100%;
        height: 800px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    .image111
    {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .image111 img{
      height:320px ;
      width:480px ;
    }
    .desc{
        flex: 1;
        font-family: 'Playfair Display', serif;
        text-align: left;
        padding: 10px;
    }
    #big{
        font-size: 30px;
        margin-bottom: 10px;
        text-align: center;
    }
    #medium
    {
        font-size: 18px;
        margin-bottom: 20px;
    }
    #small
    {
        font-size: 15px;
        margin-bottom: 20px;
    }
    #us
    {
        display: inline-block;
        margin-top: 20px;
    }
    .glow-button {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        color: white;
        text-decoration: none;
        background-color: #ef570b;
        border-radius: 5px;
        box-shadow: 0 0 20px rgba(40, 167, 69, 0.5);
        transition: box-shadow 0.3s ease-in-out;
    }
    .glow-button:hover {
        box-shadow: 0 0 30px rgba(22, 246, 2, 0.8);
    }
    #cart
    {
        width: 100%;
        height: 1300px;
        background-color: white;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 4em;

    }
    #uni{
        font-family: 'Playfair Display', serif;
        font-size: 20px;
        position: absolute;
        margin-left: 60px;
        margin-top: 50px;

    }
    #party{
        height:230px ;
        width:230px ;
    }
    #cart1
    {
        position: absolute;
        margin-bottom: 910px;
        margin-right: 20px;
        display: inline-block;
        font-size: 20px;
        font-weight: bold;

    }
    #bird1
    {
        position: absolute;
        margin-bottom: 310px;
        margin-left: 240px;
        display: inline-block;
        font-size: 20px;
        font-weight: bold;
    }
    #wed1
    {
        display: inline-block;
        position: absolute;
        margin-top: 580px;
        margin-left: 1px;
        font-size: 20px;
        font-weight: bold;
    }
    #event1
    {
        display: inline-block;
        position: absolute;
        margin-top: 1160px;
        margin-left: 10px;
        font-size: 20px;
        font-weight: bold;
    }
    #fastest
    {
        font-family: 'Playfair Display', serif;
        font-size: 40px;
    }
    #iconr
    {
        font-family: 'DM Sans', sans-serif;
        font-size: 20px;
        font-weight: medium;
    }
    .flex
    { width: 100%;
        height: 1300px;
        background-color: white;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;

    }
    #chef{
        height: 500px;
        width: 500px;
    }
    #man1 img{
        height: 500px;
        width: 300px;
    }
    #red
    {
        display: inline-block;
        position: relative;
        margin-right: 1000px;
        margin-bottom: 10px;
    }
    #party{
        border-radius: 50px;
        background: #383333;
        box-shadow: inset 20px 20px 60px #302b2b,
        inset -20px -20px 60px #403b3b;}
        html, body {
            overflow-x: hidden;
        }

        .container {
            display: flex;
            align-items:center; /* Center items vertically */
            padding: 10px;
            max-width: 100%; /* Adjust based on your design */
            justify-content: center;
            flex-direction: column;
        }

        #chef {
             height:500px ;
             width: 400px;
        }

        #fast {
color: #06d7ea;
font-size: 30px;
        }

        .text-section p {
            font-size: 20px; /* Adjust font size as needed */
            margin-bottom:15px;

        }

        .text-section .icon-text {
            display: flex;
            align-items: center; /* Align items vertically */
            margin-bottom: 10px;
        }

        .text-section .icon-text img {
            width: 34px; /* Size of icons */
            height: 34px; /* Size of icons */
            margin-right: 10px; /* Space between icon and text */
        }

}


    </style>
</head>
<body>
    @extends('layout')
   @section('content')
   <div id="background-image">
       <p id="main1">Best Food For</p>
       <p id="main">Your Taste</p>
       <p id="main2">Discover delectable cuisine and unforgettable moments in our welcoming, culinary haven.</p>
       <ul class="two">
           <li><a id="login" href="{{ url('/login') }}">Login/Signup</a></li>
           <li><a id="explore" href="{{ url('/menu') }}">Explore Menu</a></li>
       </ul>
   </div>

   <div class="three">
    <div class="image111">
        <img src="{{ asset('images/family') }}" alt="image" width="599" height="566">
    </div>
       <div class="desc">
           <div id="big"><p>We provide healthy<br> food for your family.</p></div>
           <div id="medium"><p>Our story began with a vision to create a unique dining <br> experience that merges fine dining, exceptional service, and a <br> vibrant ambiance. Rooted in city's rich culinary culture, we aim to <br> honor our local roots while infusing a global palate.</p></div>
           <div id="small"><p>At place, we believe that dining is not just about food, but also about the <br> overall experience. Our staff, renowned for their warmth and dedication,<br> strives to make every visit an unforgettable event.</p></div>
           <div class="two"><li id="us"><a href="{{ url('/about') }}" class="glow-button">More About Us</a></li></div>
       </div>
   </div>


       <div id="uni">We also offer unique services for your events</div><br>
       <div id="cart">
           <img id="party"  src="{{ asset('images/kebab-set-table 1.png') }}" width="306" height="320">
           <p id="cart1">Caterings</p>
           <img id="party" src="{{ asset('images/Mask group.png') }}" width="306" height="320">
           <p id="bird1">Birthdays</p>
           <img id="party" src="{{ asset('images/happy-man-wife-sunny-day 1.png') }}" width="306" height="320">
           <p id="wed1">Weddings</p>
           <img id="party" src="{{ asset('images/group-friends-eating-restaurant 1.png') }}" width="306" height="320">
           <p id="event1">Events</p>
       </div>
   </div>


 <div class="container">
        <img id="chef" src="{{ asset('images/mid-shot-chef-holding-plate-with-pasta-making-ok-sign 1.png') }}" alt="Chef Image">
        <div class="text-section">
            <p id="fast">Fastest Food <br> Delivery in City</p>
            <div class="icon-text">
                <img src="{{ asset('images/Icon.png') }}" alt="Icon">
                <p>Delivery within 30 minutes</p>
            </div>
            <div class="icon-text">
                <img src="{{ asset('images/Icon (1).png') }}" alt="Icon">
                <p>Best Offer & Prices</p>
            </div>
            <div class="icon-text">
                <img src="{{ asset('images/Icon (2).png') }}" alt="Icon">
                <p>Online Services Available</p>
            </div>
        </div>
    </div>


   @endsection
</body>
</html>
