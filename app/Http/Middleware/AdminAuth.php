<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    { // Check if the admin email is stored in the session
        if (!session()->has('email')) {
            // If not logged in, redirect to login page
            return redirect()->route('login')->withErrors('You must be logged in to access this page.');
        }
        return $next($request);
    }
}