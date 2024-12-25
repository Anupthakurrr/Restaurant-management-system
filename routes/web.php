<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestroController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Session;


// Public routes for users (login and signup)
Route::get('/home', [RestroController::class,'index'])->name('index');
Route::get('/menu', [RestroController::class, 'menu']);
Route::get('/about', [RestroController::class, 'about']);
Route::get('/blog', [RestroController::class, 'blog']);
Route::get('/contact', [RestroController::class, 'contact']);
Route::post('/contactus', [RestroController::class, 'contactus']);
Route::get('/login', [RestroController::class, 'login'])->name('login');
Route::post('/login', [RestroController::class, 'handleLogin']); // Handle login
Route::get('/signup', [RestroController::class, 'signup'])->name('signup');
Route::post('/add', [RestroController::class, 'add']); // Handle signup
Route::get('/logout', [RestroController::class, 'logout']); // Handle signup


// Public routes accessible to all users
Route::middleware(['admin.auth'])->group(function () {
Route::get('/terms', [RestroController::class, 'terms']);
Route::get('/profiles', [RestroController::class, 'profiles']);
Route::post('/update_profile', [RestroController::class, 'update_profile']);
Route::get('/change_password',[RestroController::class,'change_password']);
Route::get('/checkout',[AdminController::class, 'checkout']);

 });
Route::post('/reset_password', [RestroController::class, 'reset_password']);

// Food-related routes (protected by middleware)

Route::get('/food/cart/{id}', [RestroController::class, 'cart']);
    Route::get('/food/address', [RestroController::class, 'address']);
    Route::post('/adds', [RestroController::class, 'adds']);
    Route::get('/food/whislist', [RestroController::class, 'whislist']);
    Route::get('/food/userprofile', [RestroController::class, 'userprofile']);
    Route::post('/usersprofile', [RestroController::class, 'usersprofile']);
//});

// Admin routes (no middleware protection)
Route::middleware(['admin.auth'])->group(function () {
Route::get('/admin', [AdminController::class, 'index'])->name('dashboard.index');
Route::get('/menuItems', [AdminController::class, 'Items'])->name('menuItems');
Route::get('/inventory', [AdminController::class, 'stocks']);
Route::get('/customer_details', [AdminController::class, 'customer_details']);
Route::get('/menu_manage', [AdminController::class, 'menu_manage']);
Route::post('/menu', [AdminController::class, 'menu']);
});
Route::get('/profile', [AdminController::class, 'profile']);
Route::post('/profiles', [AdminController::class, 'profiles']);

//customer view and method to add
// Define the route with a name
Route::get('/customer', [AdminController::class, 'customerInfo'])->name('customerinfo.index');
Route::post('/grahak', [AdminController::class, 'grahak']);

//customer edit
Route::get('/customer/{id}/edit', [AdminController::class, 'edit']);
Route::put('/customer/{id}/edit', [AdminController::class, 'update']);

//for deleting the record
Route::get('/customer/{id}/delete', [AdminController::class, 'destroy']);

//menu edit and delete
Route::get('/menu/{id}/edit', [AdminController::class, 'menu_edit']);
Route::put('/menu/{id}', [AdminController::class, 'menu_update']);

//for deleting the record
Route::get('/menu/{id}/delete', [AdminController::class, 'menu_destroy']);

//crud operation in order

Route::get('/orders_manage', [AdminController::class, 'orders_manage']);
Route::get('/orders', [AdminController::class, 'orders'])->name('orders');
Route::post('/cust', [AdminController::class, 'cust']);
Route::get('/orderItems', [AdminController::class, 'orderInfo']);
Route::get('/order/{id}/delete', [AdminController::class, 'order_delete']);
Route::put('/order/{id}/edit', [AdminController::class, 'order_update']);
Route::get('/order/{id}/edit', [AdminController::class, 'order_edit']);


//forget password implementation
Route::get('/forgot', [RestroController::class, 'forgot']);
Route::post('/bhula', [RestroController::class, 'bhula']);
Route::get('/reset-password/{token}', [RestroController::class, 'resetpsw'])->name('resetpsw');
Route::post('/proces-reset-password', [RestroController::class, 'processResetPassword']);

Route::post('/cart/add/{id}', [AdminController::class, 'addToCart']);
Route::get('/food/viewcart', [AdminController::class, 'viewCart']);
Route::post('/wishlist/add/{id}', [AdminController::class, 'addToWishlist'])->name('wishlist.add');

Route::get('/food/whislist', [AdminController::class, 'whislist'])->name('wishlist.view');

Route::delete('/wishlist/remove/{id}', [AdminController::class, 'removeFromWishlist'])->name('wishlist.remove');

// functionality
Route::get('/menu/search', [RestroController::class, 'search']);
Route::get('/menu/sort', [RestroController::class, 'sortByPrice'])->name('menu.sort');
Route::get('/menu/filter', [RestroController::class, 'filterByDiscount'])->name('menu.filter');

