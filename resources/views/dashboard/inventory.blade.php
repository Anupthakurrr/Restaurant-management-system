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
    </style>
</head>

<body>
    <x-adminheader/>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title">foods item Information</h3>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Description</th>
                                            <th>Ingredients</th>
                                            <th>Available Stocks</th>
                                            <th>Discount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($stockItems as $stocks)
                                        <tr>
                                            <td>{{ $stocks['name'] }}</td>
                                            <td>{{ $stocks['price'] }}</td>
                                            <td>{{ $stocks['description'] }}</td>
                                            <td>{{ $stocks['ingredients'] }}</td>
                                            <td>{{ $stocks['stocks'] }}</td>
                                            <td>{{ $stocks['discount'] }}</td>
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
        <x-adminfooter/>
    </div>

    </body>

</html>
