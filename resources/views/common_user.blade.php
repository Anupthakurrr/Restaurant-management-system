<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: rgb(99, 39, 120);
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #BA68C8;
        }

        .profile-button {
            background: rgb(99, 39, 120);
            box-shadow: none;
            border: none;
        }

        .profile-button:hover {
            background: #682773;
        }

        .profile-button:focus, .profile-button:active {
            background: #682773;
            box-shadow: none;
        }

        .labels {
            font-size: 11px;
        }

        .change-password-link {
            color: #FF5722;
            font-weight: bold;
            text-decoration: none;
            margin-top: 10px;
        }

        .change-password-link:hover {
            color: #E64A19;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    @extends('layout')
    @section('content')
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-5 border-right">
                <div class="d-flex flex-column align-items-center text-center">
                    <img class="rounded-circle mt-5" width="150px" src="{{ asset('Uploads/' . ($row->profile_picture ?? 'cat.jpg')) }}">
                    <span class="font-weight-bold">{{ $row->name ?? '' }}</span>
                    <span class="text-black-50">{{ $row->email ?? '' }}</span>
                </div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <form action="{{ url('update_profile') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="labels">Name</label>
                                <input type="text" class="form-control" name="names" placeholder="Enter Username" value="{{ $row->name ?? old('names') }}">
                            </div>
                        </div>
                        {{--  <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="labels">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter Email" value="{{ $row->email ?? old('email') }}">
                            </div>
                        </div>  --}}
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="labels">Profile Image</label>
                                <input type="file" class="form-control" name="profile">
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <button class="btn btn-primary profile-button" type="submit">Save Profile</button>
                        </div>
                    </form>

                    <!-- Appealing Change Password Link -->
                    <div class="mt-4 text-center">
                        <a href="{{ url('change_password') }}" class="change-password-link">Change Password</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>
