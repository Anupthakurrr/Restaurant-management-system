<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom styles for the profile page */
        .container-scroller {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            width: 100%;
        }

        .main-panel {
            flex: 1;
            padding: 20px;
        }

        .footer {
            background-color: #f8f9fa;
            padding: 10px;
            text-align: center;
            width: 100%;
            box-sizing: border-box;
        }

        .profile-container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
        }

        .profile-img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            border: 4px solid #007bff;
            box-shadow: 0 0 15px rgba(0, 123, 255, 0.5);
        }

        .btn-custom {
            background: linear-gradient(90deg, #007bff 0%, #0056b3 100%);
            color: white;
            border: 2px solid transparent;
            border-radius: 5px;
            padding: 10px 20px;
            margin: 5px;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            transition: background 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-custom:hover {
            background: linear-gradient(90deg, #0056b3 0%, #004494 100%);
            box-shadow: 0 4px 12px rgba(0, 123, 255, 0.5);
            transform: scale(1.05);
        }

        .btn-delete {
            background: linear-gradient(90deg, #dc3545 0%, #c82333 100%);
            color: white;
            border: 2px solid transparent;
            border-radius: 5px;
            padding: 10px 20px;
            margin: 5px;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            transition: background 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-delete:hover {
            background: linear-gradient(90deg, #c82333 0%, #b21f2d 100%);
            box-shadow: 0 4px 12px rgba(220, 53, 69, 0.5);
            transform: scale(1.05);
        }

        .form-container {
            margin-top: 20px;
        }

        .form-control-file {
            border-radius: 0.25rem;
        }
        .form-container {
            margin-top: 20px;
        }

        .form-control-file {
            border-radius: 0.25rem;
        }

        .card-header {
            background-color: #0015ff;
            color: rgb(180, 175, 175);
        }

        .card-header h4 {
            margin: 0;
        }

        .card-body {
            background-color: #f8f9fa;
            padding: 20px;
        }


    </style>
</head>
<body>
    <x-adminheader />

    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="profile-container">
                        <!-- Profile Section -->
                        <div class="card mb-4">
                            <div class="card-body text-center">
                                <img src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" class="profile-img" alt="Profile Image">
                                <h3 class="mt-3">Anup Thakur</h3>
                                <p class="text-muted">athakur774@rku.ac.in</p>
                                <p>Phone: +9779817252189</p>
                                <p>Address: kasturbadham,Tramba</p>
                                <p>Role: Super Admin</p>
                                <button class="btn btn-delete">Delete Account</button>
                            </div>
                        </div>

                        <!-- Profile Form Section -->
                        <div class="card">
                            <div class="card-header">
                                <h4>Update Profile</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ url('profiles') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <textarea class="form-control" id="address" name="address" rows="3">{{ old('address') }}</textarea>
                                        @error('address')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="profile_image">Profile Image</label>
                                        <input type="file" class="form-control-file" id="profile_image" name="profile_image">
                                        @error('profile_image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-custom">Save Changes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-adminfooter />
    </div>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
