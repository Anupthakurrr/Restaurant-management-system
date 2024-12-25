<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import the Auth facade
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next)
    // {
    //     // Check if the user is authenticated
    //     if (!Auth::check()) {
    //         // Redirect to login or registration page
    //         return redirect()->route('login'); // Adjust 'login' to your actual login route name if needed
    //     }

    //     return $next($request);
    // }
}
