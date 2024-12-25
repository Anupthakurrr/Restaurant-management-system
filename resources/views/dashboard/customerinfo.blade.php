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
            /* Additional styles to ensure no decoration */
            line-height: 1.5;
            font-weight: 600;
        }

        .btn-add:hover {
            background-color: #0056b3;
            color: #fff; /* Ensure text color remains visible on hover */
            text-decoration: none; /* Ensure no underline on hover */
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
                        <h3 class="page-title">Customer Information</h3>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ url('/customer_details') }}" class="btn-add">Add Customer</a>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Contact Number</th>
                                            <th>Email Address</th>
                                            <th>Delivery Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($customerData as $customer)
                                        <tr>
                                            <td>{{ $customer['id'] }}</td>
                                            <td>{{ $customer['name'] }}</td>
                                            <td>{{ $customer['contact'] }}</td>
                                            <td>{{ $customer['email'] }}</td>
                                            <td>{{ $customer['delivery_address'] }}</td>
                                            <td>
                                                <a href="{{ url('customer/'.$customer['id'].'/edit') }}" class="btn btn-success mx-2">Edit</a>
                                                <a href="{{ url('customer/'.$customer['id'].'/delete') }}" class="btn btn-danger mx-2">Delete</a>
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
        <x-adminfooter/>
    </div>

    </body>

</html>
