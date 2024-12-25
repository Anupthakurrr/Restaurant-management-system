<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
        $(document).ready(function(){
            // Hover effect for boxes
            $('.maind #first').hover(
                function(){
                    $(this).addClass('hovered');
                },
                function(){
                    $(this).removeClass('hovered');
                }
            );
        });
        setInterval(function() {
                $("#logo").fadeToggle(1000); // You can adjust the duration as needed
            }, 2000);
    </script> <style>
        .page {
            width: 100%;
            background-color: white;
            padding: 20px;
            box-sizing: border-box;
        }
        #our {
            text-align: center;
            font-size: 2.5em;
            font-family: 'Playfair Display', serif;
            margin-bottom: 20px;
        }
        #your {
            text-align: center;
            font-size: 1em;
            font-family: 'DM Sans', sans-serif;
            margin-bottom: 40px;
        }
        .maind {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            background-color: #ffffff;
        }
        .blog-item {
            width: 100%;
            max-width: 306px;
            background-color: white;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin: 0 auto; /* Centering the item */
        }
        .blog-item img {
            width: 100%;
            height: auto; /* Maintain aspect ratio */
            display: block;
        }
        .blog-item .dive {
            height: auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }
        .blog-item.hovered {
            transform: scale(1.05); /* Slightly increase the size */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Add shadow */
        }
        /* Responsive Styles */
        @media (max-width: 480px) {
            #our {
                font-size: 1.8em;
            }
            #your {
                font-size: 0.9em;
            }
            .maind {
                padding: 0;
                gap: 10px;
            }
            .blog-item {
                width: calc(100% - 20px); /* Adjust width to account for margin */
                margin: 10px; /* Margin on each side */
            }
            .blog-item img {
                height: 150px; /* Adjust height to fit better */
            }
            .blog-item .dive {
                padding: 5px;
                font-size: 0.9em;
            }
        }
    </style>

</head>
<body>
    @extends('layout')
    @section('content')
    <div class="page">
        <div><p id="our">Our Menu <br>Our Blog & Articles</p>
        <p id="your">
            We consider all the drivers of change gives you the components you need to change to create a truly happens.
        </p></div>

        <div class="maind">
            <div id="first">
                <div id="di"><img src="{{asset('images/mask group (4).png')}}" height="200px"></div>
                <div id="dive"><p>How to prepare a delicious gluten free sushi</p></div>
            </div>
            <div id="first">
                <div><img src="{{asset('images/pexels-skyler-ewing-10307512 1.png')}}" width="306px" height="200px"></div>
                <div id="dive"><p>Exclusive baking lessons from the pastry king</p></div>
            </div>
            <div id="first">
                <div><img src="{{asset('images/mask group (5).png')}}" width="306px" height="200px"></div>
                <div id="dive"><p>How to prepare the perfect fries in an air fryer</p></div>
            </div>
            <div id="first">
                <div><img src="{{asset('images/Mask group (6).png')}}" width="306px" height="200px"></div>
                <div id="dive"><p>How to prepare delicious chicken tenders</p></div>
            </div>
            <div id="first">
                <div><img src="{{asset('images/Mask group (8).png')}}" alt=""></div>
                <div id="dive"><p>5 great cooking gadgets you can buy to save time</p></div>
            </div>
            <div id="first">
                <div><img src="{{asset('images/Mask group (9).png')}}" alt=""></div>
                <div id="dive"><p>The secret tips & tricks to prepare a perfect burger</p></div>
            </div>
            <div id="first">
                <div><img src="{{asset('images/Mask group (14).png')}}" alt=""></div>
                <div id="dive"><p>7 delicious cheesecake recipes you can prepare</p></div>
            </div>
            <div id="first">
                <div><img src="{{asset('images/Mask group (10).png')}}" alt=""></div>
                <div id="dive"><p>5 great pizza restaurants you should visit this city</p></div>
            </div>
            <div id="first">
                <div><img src="{{asset('images/Mask group (11).png')}}" alt=""></div>
                <div id="dive"><p>5 great cooking gadgets you can buy to save time</p></div>
            </div>
            <div id="first">
                <div><img src="{{asset('images/Mask group (15).png')}}" alt=""></div>
                <div id="dive"><p>How to prepare a delicious gluten free sushi</p></div>
            </div>
            <div id="first">
                <div><img src="{{asset('images/Mask group (12).png')}}" alt=""></div>
                <div id="dive"><p>Top 20 simple and quick desserts for kids</p></div>
            </div>
            <div id="first">
                <div><img src="{{asset('images/Mask group (16).png')}}" alt=""></div>
                <div id="dive"><p>Top 20 simple and quick desserts for kids</p></div>
            </div>
        </div>
       @endsection
</body>
</html>
