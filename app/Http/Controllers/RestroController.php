<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\restaurant; // Import the reg model
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Models\admin;
use App\Models\menuInfo; // Import the reg model
use Illuminate\Support\str;
use App\Mail\ResetPasswordEmail;

class RestroController extends Controller
{
    public function index()
    {
        return view('Home');
    }
    public function menu()
    {
        // Retrieve menu items from the database (using Eloquent model)
        $menuItems = menuInfo::all(); // Fetch all menu items

        // Pass the menu items to the view using compact()
        return view('menu', compact('menuItems'));
    }

    public function about()
    {
        return view('about');
    }
    public function blog()
    {
        return view('blog');
    }
    public function contact()
    {
        return view('contact');
    }
    public function signup()
    {
        return view('signup');
    }
    public function login()
    {
        return view('login');
    }

    public function cart($id)
    {
        // Fetch the specific menu item using its ID
        $menuItem = menuInfo::find($id);

        // Pass the menu item to the cart view
        return view('food.cart', compact('menuItem'));
    }


    public function address()
    {
        return view('food.address');
    }
    public function whislist()
    {
        return view('food.whislist');
    }
    public function adds(Request $request)
    {
        // Define validation rules
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'contact' => 'required|regex:/^\d{10}$/',
            'address' => 'required|string|max:255',
            'message' => 'required|string|max:500',
        ], [
            'contact.regex' => 'The contact number must be 10 digits.',
        ]);

        // Process the validated data
        // ...

    }







    public function terms()
    {
        return view('terms');
    }

    public function adduser(Request $request)
    {
        $request->validate([
            'username' => 'required|regex:/^[a-zA-Z0-9_]{3,16}$/',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'phone' => 'required|digits:10',
            'address' => 'required|string|max:255',
            'dob' => 'required|date',
            'profile-picture' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'terms' => 'accepted',
        ], [
            'username.required' => 'The username field is required.',
            'username.regex' => 'Username must be 3-16 characters long and can include letters, numbers, and underscores.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please provide a valid email address.',
            'email.unique' => 'The email address is already taken.',
            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least 8 characters long.',
            'password.confirmed' => 'The password confirmation does not match.',
            'phone.digits' => 'The phone number must be 10 digits.',
            'address.max' => 'The address may not be greater than 255 characters.',
            'dob.date' => 'The date of birth must be a valid date.',
            'profile-picture.image' => 'The profile picture must be an image.',
            'profile-picture.mimes' => 'The profile picture must be a file of type: jpg, jpeg, png.',
            'profile-picture.max' => 'The profile picture may not be greater than 2 MB.',
            'terms.accepted' => 'You must accept the terms and conditions.',
        ]);
    }

    public function contactus(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required|digits:10',
        'message' => 'required|string',
    ], [
        'name.required' => 'The name field is required.',
        'name.string' => 'The name must be a string.',
        'name.max' => 'The name may not be greater than 255 characters.',
        'email.required' => 'The email field is required.',
        'email.email' => 'Please provide a valid email address.',
        'phone.digits' => 'The phone number must be 10 digits.',
        'message.required' => 'The message field is required.',
        // Process the contact form submission, such as sending an email or saving to the database.
    ]);
    }

    public function userprofile()
    {
        return view('food.userprofile');
    }
    public function usersprofile(Request $request)
{
    $request->validate([
        'name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]+$/'],
        'email' => ['required', 'email', 'max:255'],
        'phone' => ['required', 'string', 'regex:/^\+?\d{10,15}$/'],
        'address' => ['required', 'string', 'max:255'],
        'profile_image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
    ]);

}

//forget password
public function forgot()
{
    return view('forgot');
}
public function bhula(Request $request)
{
    $validator = $request->validate([
        'email' => 'required|email|exists:users,email'
    ]);



    $token = Str::random(60);

     DB::table('password_reset_tokens')->where('email',$request->email)->delete();

    DB::table('password_reset_tokens')->insert([
        'email' => $request->email,
        'token' => $token,
        'created_at' => now()

        //return redirect()->route(forgot);

    ]);

    //sends email here

    $user = restaurant::where('email',$request->email)->first();

    $formData = [
        'token' => $token,
        'user' => $user,
        'mailSubject' => 'You Have Requested to reset your password'
    ];
    Mail::to($request->email)->send(new ResetPasswordEmail($formData));

   // return redirect()->route(forgot)->with('success',please check inbox to change password);


}

public function resetpsw($token)
{
    $tokenExit = DB::table('password_reset_tokens')->where('token', $token)->first();

    if ($tokenExit == null) {
        return redirect()->route('forgot')->with('error', 'Invalid request');
    }

    return view('password-reset', [
        'token' => $token, // Change here: use a comma instead of a semicolon
    ]);
}


public function processResetPassword(Request $request)
{
    $token = $request->token;
    $tokenExit = DB::table('password_reset_tokens')->where('token', $token)->first();

    if ($tokenExit == null) {
        return redirect()->route('forgot')->with('error', 'Invalid request');
    }

    $user = restaurant::where('email', $tokenExit->email)->first();

    // Validate the passwords
    $request->validate([
        'password' => 'required|min:5',
        'conpassword' => 'required|min:5|same:password'
    ]);

    // Update the password
    restaurant::where('id', $user->id)->update([
        'password' => Hash::make($request->password), // Ensure this uses 'password'
    ]);

    // Delete the token
    DB::table('password_reset_tokens')->where('token', $token)->delete();

    return redirect()->route('login')->with('success', 'You have successfully updated your password');
}


public function add(Request $form_data)
    {
        // Validate the incoming request
        $form_data->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Hash the password
        $psw = Hash::make($form_data['password']);

        //Handle the file upload
        if ($form_data->hasFile('profile_picture')) {
            $profilePicture = $form_data->file('profile_picture');
            $profilePictureName = time() . '.' . $profilePicture->getClientOriginalExtension();
            $profilePicture->move(public_path('Uploads'), $profilePictureName); // Save to 'Uploads' folder
        } else {
            $profilePictureName = 'crack.jpg'; // Default profile image
        }

        // Create a new user record in the database
        restaurant::create([
            'name' => $form_data['name'],
            'email' => $form_data['email'],
            'password' => $psw,
             'profile_picture' => $profilePictureName, // Updated column name
            'number' => $form_data['number'],
            'address' => $form_data['address']
        ]);

        return "User registered successfully!";
    }


    public function handlelogin(Request $form_data)
    {
        // Validate input
        $credentials = $form_data->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'The email field is required.',
            'email.email' => 'Please provide a valid email address.',
            'password.required' => 'The password field is required.',
        ]);

        // Check if the email is registered in the Admin table
      $admin = DB::table('admin')->where('email', $form_data->input('email'))->first();

        if ($admin) {
            // Check if the password matches for Admin
            if (Hash::check($form_data->input('password'), $admin->password)) {
                // Store email in session
                session(['email' => $admin->email]);
                // Redirect to admin dashboard
                return redirect()->route('dashboard.index')->with('success','Welcome Admin!');
            } else {
                // Incorrect password for Admin
                return redirect()->back()->withErrors(['password' => 'Password does not match']);
            }
        }

        // If not Admin, check if the email is registered in the Restaurant (User) table
        $user = restaurant::where('email', $form_data->input('email'))->first();
        if ($user) {
            // Check if the password matches for the common user
            if (Hash::check($form_data['password'], $user->password)) {
                // Store email in session
                session(['email' => $user->email]);
                // Redirect to user homepage
                return redirect()->route('index')->with('success', 'Welcome User!');
            } else {
                // Incorrect password for User
                return redirect()->back()->withErrors(['password' => 'Password does not match']);
            }
        } else {
            // Email is not registered
            return redirect()->back()->withErrors(['email' => 'Email is not registered']);
        }
    }

    public function logout()
    {
        session()->flush(); // Clears all session data
        return redirect()->route('login');
    }


    public function users()
    {
        $users = DB::select('select * from reg');
        return view('users',['users'=>$users]);
    }
     public function profile()
     {
         $email = session('email');
         $row::where('email',$email)->first();
     }

    public function update_profile(Request $form_data)
    {
        $row = restaurant::where('email', session('email'))->first();

        // Handle profile image upload
        if ($form_data->hasFile('profile')) {
            $temp_name = $form_data->file('profile');
            $org_name = $temp_name->getClientOriginalName();
            $temp_name->move(public_path('Uploads/'), $org_name);
            $row->profile_picture = $org_name;
        }

        // Update name and email
        $row->name = $form_data->input('names');
       // $row->email = $form_data->input('email');

        // Save to database
        $row->save();

        return redirect()->back()->with('success', 'Profile updated successfully');
    }
    public function profiles()
    {
        $row = restaurant::where('email', session('email'))->first();
return view('common_user', compact('row'));
    }

    //change password

    public function change_password()
{
    return view('change_password');
}
public function reset_password(Request $request) {
   // Validate the request inputs
    $request->validate([
        'old_password' => 'required',
        'new_password' => 'required|min:6',
        'confirm_password' => 'required|same:new_password',
    ]);

   //  Retrieve the user based on the session email
    $row = restaurant::where('email', session('email'))->first();

    // Check if the old password matches the stored password
    if (Hash::check($request->old_password, $row->password)) {
        // Update the password in the database
        $row->password = Hash::make($request->new_password);
        $row->save();
        session()->flush();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Password updated successfully.');
    } else {
        // Redirect back with error message if old password is incorrect
        return redirect()->back()->with('error', 'Old password is incorrect.');
    }
}
public function search(Request $request)
{
    $query = $request->input('query');
    $menuItems = MenuInfo::where('name', 'LIKE', "%$query%")
        ->orWhere('ingredients', 'LIKE', "%$query%")
        ->get();

    return view('menu', compact('menuItems'));
}

public function sortByPrice(Request $request)
{
    $sortOrder = $request->input('order', 'asc'); // Default to ascending order
    $menuItems = menuInfo::orderBy('price', $sortOrder)->get();
    return view('menu', compact('menuItems'));
}
public function filterByDiscount(Request $request)
{
    $discount = $request->input('discount');
    // Assuming you have a 'discount' column in your database to filter items
    if ($discount) {
        $menuItems = MenuInfo::where('discount', '>=', $discount)->get();
    } else {
        $menuItems = MenuInfo::all(); // or return the original list if no filter is applied
    }

    return view('menu', compact('menuItems'));
}

}
