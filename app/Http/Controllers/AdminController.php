<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customerInfo;
use App\Models\menuInfo;
use App\Models\orderInfo;
use App\Models\admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Stripe\Stripe;
use Stripe\PaymentIntent;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function profile()
    {
        return view('dashboard.profile');
    }

    public function customerInfo()
    {
        // Sample customer data with 10 entries
        $customerData = customerInfo::get();
        return view('dashboard.customerinfo', compact('customerData'));
    }



    public function Items()
    {
        $menuItems = menuInfo::get();

        return view('dashboard.menuItems', compact('menuItems'));
    }

    public function orders()
    {
        $orderItems = orderInfo::get(); // Ensure 'image' field exists in your DB

        return view('dashboard.orders', compact('orderItems'));
    }

public function customer_details()
{
    return view('dashboard.customer_details');
}

public function menu_manage()
{
    return view('dashboard.menu_manage');
}

public function orders_manage()
{
    return view('dashboard.orders_manage');
}




    // Handle the form submission logic here (e.g., saving data to the database)

public function grahak(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|regex:/^[\pL\s\-]+$/u|min:2|max:15', // Name should only contain letters, spaces, and hyphens, and should be between 2 and 15 characters
        'contact' => 'required|numeric|digits:10', // Contact should be exactly 10 digits
        'email' => 'required|email|max:50', // Email must be valid and should not exceed 50 characters
        'address' => 'required|string|min:10', // Address should be at least 10 characters long
        ]);

        customerInfo::create([
            'name' => $request->name, // Correct way to access request data
            'contact' => $request->contact,
            'email' => $request->email,
            'delivery_address' => $request->address // Fixed the field reference
        ]);

        // Redirect back to the customer list with success message
        return redirect('customer')->with('success', 'Customer inserted successfully');
}
public function profiles(Request $request)
{
    // Validate the form input
    $validatedData = $request->validate([
        'name' => 'required|string|min:2|max:15',
        'email' => 'required|email|max:255',
        'phone' => ['required', 'regex:/^\+?\d{10,15}$/'],
        'address' => 'required|string|max:255',
        'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Handle profile image upload
    if ($request->hasFile('profile_image')) {
        // Get the uploaded file
        $image = $request->file('profile_image');

        // Generate a unique filename
        $filename = time() . '_' . $image->getClientOriginalName();

        // Move the file to the 'admin' folder inside the 'public' directory
        $image->move(public_path('uploads/admin'), $filename);

        // Save the filename in the validated data to be stored in the database
        $validatedData['profile_image'] = 'uploads/admin/' . $filename;
    }

    // Save the validated data to the AdminProfile model
    AdminProfile::create($validatedData);

    // Redirect back with success message
    return redirect()->back()->with('success', 'Admin profile created successfully!');
}

//edit for customer table

public function edit(int $id)
{
    $customer = customerInfo::findOrFail($id);
    return view('dashboard.customer_edit',compact('customer'));
}

public function update(Request $request,int $id)
{
    $validatedData = $request->validate([
        'image' => 'nullable|image|max:2048',
        'name' => 'required|string|regex:/^[\pL\s\-]+$/u|min:2|max:15', // Name should only contain letters, spaces, and hyphens, and should be between 2 and 15 characters
        'contact' => 'required|numeric|digits:10', // Contact should be exactly 10 digits
        'email' => 'required|email|max:50', // Email must be valid and should not exceed 50 characters
        'address' => 'required|string|min:10', // Address should be at least 10 characters long
        ]);

        customerInfo::findOrFail($id)->update([
            'name' => $request->name, // Correct way to access request data
            'contact' => $request->contact,
            'email' => $request->email,
            'delivery_address' => $request->address // Fixed the field reference
        ]);

        // Redirect back to the customer list with success message
        return redirect()->route('customerinfo.index')->with('success', 'Customer updated successfully.');

    }

    public function destroy(int $id)
    {
        // Find the customer by ID
        $customer = customerInfo::findOrFail($id);

        // Delete the customer record
        $customer->delete();

        // Redirect back to the customer list with a success message
        return redirect('customer')->with('success', 'Customer deleted successfully.');
    }
//menu edit page retriving data from database to edit
public function menu(Request $request)
{
    $request->validate([
        'image' => 'required|image|max:5120', // Image validation (max size: 5MB)
        'name' => 'required|string|regex:/^[\pL\s\-]+$/u|min:2|max:25', // Name should only contain letters, spaces, and hyphens, and should be between 2 and 15 characters
        'price' => 'required|numeric|min:0',
        'ingredients' => 'required|string|min:5', // Ensuring ingredients is at least 5 characters long
        'discount' => 'required|numeric|min:0|max:100|regex:/^\d+(\.\d{1,2})?$/',
        'quantity' => 'required|integer|min:0|max:100',
        'status' => 'required|in:Pending,completed,cancelled',
        'rating' => 'required|integer|min:0|max:100',
    ]);

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        // Create a unique image name using a timestamp
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        // Move the uploaded image to the 'products' folder in the public directory
        $image->move(public_path('products'), $imageName);
    }

    menuInfo::create([
        'product_pic' => $imageName, // Save the image name (not the whole object)
        'name' => $request->name, // Correct way to access request data
        'price' => $request->price,
        'ingredients' => $request->ingredients, // Fixed the field reference4
        'discount' => $request->discount, // Discount applied
        'quantity' => $request->quantity, // Product quantity
        'status' => $request->status, // Product status
        'rating' => $request->rating,
    ]);

    return redirect('menu_manage')->with('success', 'Menu inserted successfully');
    // Handle the form submission logic here (e.g., saving data to the database)
}

public function menu_edit(int $id)
{
    $menu = menuInfo::find($id);
    return view('dashboard.menu_edit',compact('menu'));
}

public function menu_update(Request $request, int $id)
{
    // Validate input fields
    $request->validate([
        'name' => 'required|string|regex:/^[\pL\s\-]+$/u|min:2|max:15',
        'price' => 'required|numeric|min:0',
        'ingredients' => 'required|string|min:5',
    ]);

    // Find the menu item
    $menu = menuInfo::findOrFail($id);

    // Check if the image is uploaded
    if ($request->hasFile('image')) {
        // Delete the old image if it exists
        if ($menu->product_pic && file_exists(public_path('products/' . $menu->product_pic))) {
            unlink(public_path('products/' . $menu->product_pic));
        }

        // Handle the new image upload
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('products'), $imageName);

        // Set the new image name in the model
        $menu->product_pic = $imageName;
    }

    // Update the rest of the fields
    $menu->update([
        'name' => $request->name,
        'price' => $request->price,
        'ingredients' => $request->ingredients,
        'discount' => $request->discount,
        'quantity' => $request->quantity,
        'status' => $request->status,
        'rating' => $request->rating,
    ]);

    // Save the changes to the model
    $menu->save();

    // Redirect with success message
    return redirect()->route('menuItems')->with('success', 'Menu updated successfully.');
}



public function menu_destroy(int $id)
{
    // Find the menu by ID
    $menu = menuInfo::findOrFail($id);

    // Delete the menu image if it exists
    if ($menu->product_pic && file_exists(public_path('products/' . $menu->product_pic))) {
        unlink(public_path('products/' . $menu->product_pic));
    }

    // Delete the menu record
    $menu->delete();

    // Redirect with success message
    return redirect('menuItems')->with('success', 'Menu deleted successfully.');
}


    public function cust(Request $request)
{
    // Validate the incoming request
    $request->validate([
        'image' => 'required|image|max:5120', // Image validation
        'name' => 'required|string|regex:/^[\pL\s\-]+$/u|min:3|max:20',
        'price' => 'required|numeric|min:0|regex:/^\d+(\.\d{1,2})?$/',
        'discount' => 'required|numeric|min:0|max:100|regex:/^\d+(\.\d{1,2})?$/',
        'quantity' => 'required|integer|min:0|max:100',
        'status' => 'required|in:Pending,completed,cancelled',
    ]);

    // Handle the image upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension(); // Create a unique image name
        $image->move(public_path('product'), $imageName); // Save to 'product' folder in the public directory
    }

    // Insert data into the database, including the image path
    orderInfo::create([
        'name' => $request->name, // Product/customer name
        'price' => $request->price, // Product price
        'discount' => $request->discount, // Discount applied
        'quantity' => $request->quantity, // Product quantity
        'status' => $request->status, // Product status
        'image' => $imageName, // Save image name to database
    ]);

}

    public function order_edit(int $id)
{
    $order = orderInfo::find($id);
    return view('dashboard.order_edit',compact('order'));
}

public function order_update(Request $request, int $id)
{
    // Validate the incoming request
    $request->validate([
        'image' => 'nullable|image|max:5120', // Validation for image
        'name' => 'required|string|regex:/^[\pL\s\-]+$/u|min:3|max:20',
        'price' => 'required|numeric|min:0|regex:/^\d+(\.\d{1,2})?$/',
        'discount' => 'required|numeric|min:0|max:100|regex:/^\d+(\.\d{1,2})?$/',
        'quantity' => 'required|integer|min:0|max:100',
        'status' => 'required|in:Pending,completed,cancelled',
    ]);

    // Find the existing order
    $order = orderInfo::findOrFail($id);

    // Check if an image is uploaded
    if ($request->hasFile('image')) {
        // Delete the old image if it exists
        if ($order->image && file_exists(public_path('product/' . $order->image))) {
            unlink(public_path('product/' . $order->image));
        }

        // Handle the new image upload
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('product'), $imageName);

        // Update the order with the new image
        $order->image = $imageName;
    }

    // Update other fields
    $order->update([
        'name' => $request->name,
        'price' => $request->price,
        'discount' => $request->discount,
        'quantity' => $request->quantity,
        'status' => $request->status,
    ]);

    // Redirect with success message
    return redirect()->route('orders')->with('success', 'Order updated successfully.');
}


public function order_delete(int $id)
{
      $order = orderInfo::findOrFail($id);

    // Delete the customer record
    $order->delete();

}
public function addToCart(Request $request, $id)
{
    $menuItem = menuInfo::find($id);
    $quantity = $request->input('quantity');

    if ($menuItem) {
        $totalPrice = $menuItem->price * $quantity;

        $cart = session()->get('cart', []);
        $cart[$id] = [
            'name' => $menuItem->name,
            'quantity' => $quantity,
            'price' => $menuItem->price,
            'total' => $totalPrice,
            'image' => $menuItem->product_pic,
            'stock' => $menuItem->stock,
            'rating'=> $menuItem->rating,
        ];

        session()->put('cart', $cart);
        return redirect('/food/viewcart')->with('success', 'Item added to cart!');
    }

    return redirect()->back()->with('error', 'Item not found.');
}

public function viewCart()
{
    $cart = session()->get('cart', []);
    return view('food.viewcart', compact('cart'));
}

public function addToWishlist(Request $request, $id)
{
    $menuItem = menuInfo::find($id);

    if ($menuItem) {
        $wishlist = session()->get('wishlist', []);

        if (!isset($wishlist[$id])) {
            $wishlist[$id] = [
                'name' => $menuItem->name,
                'description' => $menuItem->description,
                'price' => $menuItem->price,
                'product_pic' => $menuItem->product_pic,
            ];

            session()->put('wishlist', $wishlist);
            return redirect('/food/whislist')->with('success', 'Item added to wishlist!');
        }

        return redirect('/food/whislist')->with('success', 'Item added to wishlist!');
    }

    return redirect('/food/whislist')->with('success', 'Item added to wishlist!');
}

public function whislist()
{
    $wish = session()->get('wishlist', []);
    return view('food.whislist', compact('wish'));
}

public function removeFromWishlist($id)
{
    $wishlist = session()->get('wishlist', []);

    if (isset($wishlist[$id])) {
        unset($wishlist[$id]);
        session()->put('wishlist', $wishlist);
        return redirect()->back()->with('success', 'Item removed from wishlist!');
    }

    return redirect()->back()->with('error', 'Item not found in wishlist.');
}

public function checkout()
{
    $cart = session()->get('cart', []); // Assuming cart is stored in session
    $totalPrice = 0;

    // Calculate total price
    foreach ($cart as $id => $item) {
        $totalPrice += $item['price'] * $item['quantity'];
    }

    // Pass $totalPrice and $cart to the view
    return view('checkout', compact('totalPrice', 'cart'));
}

}











