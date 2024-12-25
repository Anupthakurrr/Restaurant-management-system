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
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title">Edit Menu Item</h3>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="form-container">
                                <!-- Correct form action URL -->
                                <form action="{{ url('menu/'.$menu->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT') <!-- To handle the PUT request for updating -->

                                    <!-- Product Image Upload -->
                                    <div class="form-group">
                                        <label for="image">Product Image</label>
                                        <input type="file" class="form-control-file" id="image" name="image">
                                        @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                        <!-- Display existing product image if it exists -->
                                        @if($menu->product_pic)
                                            <img src="{{ asset('products/' . $menu->product_pic) }}" alt="Product Image" width="100">
                                        @endif
                                    </div>

                                    <!-- Name Field -->
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ $menu->name }}">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Price Field -->
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ $menu->price }}">
                                        @error('price')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Ingredients Field -->
                                    <div class="form-group">
                                        <label for="ingredients">Ingredients</label>
                                        <textarea class="form-control" id="ingredients" name="ingredients" rows="3">{{ $menu->ingredients }}</textarea>
                                        @error('ingredients')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="ingredients">Ingredients</label>
                                        <textarea class="form-control" id="ingredients" name="ingredients" rows="3">{{ $menu->ingredients }}</textarea>
                                        @error('ingredients')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Discount Field -->
                                    <div class="form-group">
                                        <label for="discount">Discount</label>
                                        <input type="number" class="form-control" id="discount" name="discount" value="{{ $menu->discount }}">
                                        @error('discount')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Available Quantity Field -->
                                    <div class="form-group">
                                        <label for="quantity">Available Quantity</label>
                                        <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $menu->quantity }}">
                                        @error('quantity')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Status Field -->
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select class="form-control" id="status" name="status">
                                            <option value="Pending" {{ $menu->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="completed" {{ $menu->status == 'completed' ? 'selected' : '' }}>Completed</option>
                                            <option value="cancelled" {{ $menu->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                        </select>
                                        @error('status')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="rating">Available rating</label>
                                        <input type="number" class="form-control" id="rating" name="rating" value="{{ $menu->rating }}">
                                        @error('rating')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Submit Button -->
                                    <button type="submit" class="btn btn-primary">Update Menu Item</button>
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
