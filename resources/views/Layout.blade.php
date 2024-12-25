<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link href=" {{ asset('css/bootstrap.css') }}" rel="stylesheet"  crossorigin="anonymous">
    <script src="{{asset('css/bundle.js')}}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{asset('js/jquery.js')}}"></script>
    <title>Document</title>
</head>
<body>
    <header>
        <div class="social">
            <img id="phonelogo" src={{asset('images/solar_phone-broken.png')}}>
            <p id="phone1">+918298542274</p>
            <img id="mail" src={{asset('images/material-symbols_mail-outline.png')}}>
            <p id="message1">anupthakurff@gmail.com</p>
        <a href="https://www.facebook.com/profile.php?id=100032039724254"> <img id="facebook" src={{asset('images/la_facebook.png')}}></a>
        <a href="https://www.instagram.com/maithil_brahmin__/"><img id="insta" src={{asset('images/jam_instagram.png')}}></a>
            <a href="https://www.linkedin.com/in/anup-thakur-bbaa4626a"> <img id="linked" src={{asset('images/mdi_linkedin.png')}}></a>

        </div>


            <img id="logo" src="{{asset('images/japanese-food.png')}}">
            <p id="company">EZZE EATS</p>

              <header>
                <nav>
                    <ul>
                        <li><a href="{{ url('/home') }}">Home</a></li>
                        <li><a href="{{ url('/about') }}">About</a></li>
                        <li><a href="{{ url('/menu') }}">Menu</a></li>
                        <li><a href="{{ url('/blog') }}">Blog</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                        @if(session()->has('email'))
                        <li>
                            <a href="{{ url('/logout') }}">Logout</a>
                        </li>
                        <li>
                            <a href="{{ url('/profiles') }}">Profile</a>
                        </li>
                    @else
                        <li>
                            <li><a href="{{ url('/login') }}">LOGIN</a></li>
                        </li>
                    @endif
                    <li><a href="{{ url('/food/viewcart') }}" class="cart-link">
                        <img src="{{ asset('images/grocery-store.png') }}" width="50px" height="50px" alt="cart">
                        @if(session('cart'))
                        <span class="cart-count">{{ count(session('cart')) }}</span>
                        @endif
                    </a></li>                 
                </nav>
                 </header>
        </div>
       </nav>
    </header>
<div>
    @yield('content')
</div>
    <footer>
        <div class="footer">
            <div id="japan">
                <img src={{asset('images/japanese-food.png')}} width="56px" height="56px">
                <p id="era">In the new era of <br> technology we look a in<br> the future with certainty<br> and pride to for our company and.</p>
            </div>
            <div id="link">
                <p id="page">Pages</p>
                <nav id="white">
                <ul>
                <li><a href="{{ url('/home') }}">Home</a></li>
        <li><a href="{{ url('/about') }}">About</a></li>
        <li><a href="{{ url('/menu') }}">Menu</a></li>
        <li><a href="{{ url('/blog') }}">Blog</a></li>
        <li><a href="{{ url('/contact') }}">Contact</a></li>
        <li><a href="{{ url('/login') }}">LOGIN</a></li> </ul>
                </nav>
            </div>
            <div class="si">
                <p id="instagram">Follow Us On Instagram</p>
                <img id="footer1" src="{{ asset('images/pexels-steve-3789885 1.png') }}" width="150px" height="150px">
                <img id="footer2" src="{{ asset('images/eiliv-aceron-d5PbKQJ0Lu8-unsplash 1.png') }}" width="150px" height="150px">
                <img id="footer3" src="{{ asset('images/Mask group (2).png') }}" width="150px" height="150px">
                <img id="footer4" src="{{ asset('images/Mask group (1).png') }}" width="150px" height="150px">
            </div>
             <div id="footer5">Copyright © 2024 Hashtag Developer. All Rights Reserved</div>
          </div>

    </footer>
</body>
</html>
