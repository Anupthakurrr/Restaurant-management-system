<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom styles for the form */
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

        .form-container {
            max-width: 800px;
            margin: 0 auto;
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
                        <h3 class="page-title">Add Menu Item</h3>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="form-container">
                                <form action="{{ url('menu') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="image">Product Image</label>
                                        <input type="file" class="form-control" id="image" name="image" value="{{ old('image') }}">
                                        @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" >
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input type="number" step="0.01" class="form-control" id="price" name="price" >
                                        @error('price')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    </div>



                                    <div class="form-group">
                                        <label for="ingredients">Ingredients</label>
                                        <textarea class="form-control" id="ingredients" name="ingredients" rows="3" ></textarea>
                                        @error('ingredients')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    </div>

                                    <div class="form-group">
                                        <label for="discount">Discount</label>
                                        <input type="number" class="form-control" id="discount" name="discount" value="{{ old('discount') }}">
                                        @error('discount')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Quantity Field -->
                                    <div class="form-group">
                                        <label for="quantity">Available Quantity</label>
                                        <input type="number" class="form-control" id="quantity" name="quantity" value="{{ old('quantity') }}">
                                        @error('quantity')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Status Field -->
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select class="form-control" id="status" name="status">
                                            <option value="Pending" {{ old('status') == 'Pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                                            <option value="cancelled" {{ old('status') == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                        </select>
                                        @error('status')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="rating">Available Rating</label>
                                        <input type="number" class="form-control" id="rating" name="rating" value="{{ old('rating') }}">
                                        @error('rating')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-primary">Add Menu Item</button>
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
