<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <style>
        /* Ensure footer and container are full width and correctly positioned */
        .container-scroller {
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Full viewport height */
            width: 100%;
        }

        .main-panel {
            flex: 1; /* Take available space */
            padding: 20px;
        }

        .footer {
            background-color: #f8f9fa;
            padding: 10px;
            text-align: center;
            width: 100%;
            box-sizing: border-box; /* Include padding in width */
        }

        .table-responsive {
            width: 100%;
            overflow-x: auto; /* Allow horizontal scrolling if needed */
            box-sizing: border-box; /* Include padding in width */
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        /* Alternating row colors */
        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table tbody tr:nth-child(odd) {
            background-color: #ffffff;
        }

        /* Style for table headings */
        .table thead th {
            background-color: #007bff;
            color: #fff;
            text-align: left;
        }

        .btn-add {
            display: inline-block;
            padding: 10px 20px;
            margin-bottom: 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            text-decoration: none; /* Ensure no underline */
            text-align: center;
            font-size: 16px;
            cursor: pointer;
            line-height: 1.5;
            font-weight: 600;
        }

        .btn-add:hover {
            background-color: #0056b3;
            color: #fff; /* Ensure text color remains visible on hover */
            text-decoration: none; /* Ensure no underline on hover */
        }

        .product-image {
            width: 120px !important; /* Set the width you want */
            height: 80px !important; /* Set a fixed height for a rectangular shape */
            object-fit: cover !important; /* Ensures the image fills the space without being distorted */
            border-radius: 5px !important; /* Optional: adds rounded corners */
            display: block; /* Makes the image a block element */
            margin: 0 auto; /* Centers the image */
            padding: 0; /* Removes any padding */
        }

    </style>
</head>

<body>
    <x-adminheader />
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title">Food Item Information</h3>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ url('/menu_manage') }}" class="btn-add">Add Menu</a>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Product Pic</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Ingredients</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($menuItems as $Item)
                                        <tr>
                                            <td>{{ $Item['id'] }}</td>
                                            <td>
                                                <img src="{{ asset('products/' . $Item['product_pic']) }}" alt="Product Image" class="product-image">
                                            </td>
                                            <td>{{ $Item['name'] }}</td>
                                            <td>{{ $Item['price'] }}</td>
                                            <td>{{ $Item['ingredients'] }}</td>
                                            <td>
                                                <a href="{{ url('menu/'.$Item['id'].'/edit') }}" class="btn btn-success mx-2">Edit</a>
                                                <a href="{{ url('menu/'.$Item['id'].'/delete') }}" class="btn btn-danger mx-2">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-adminfooter />
    </div>
</body>

</html>
