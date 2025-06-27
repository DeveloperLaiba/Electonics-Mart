<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ValidUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        // Check if the user is logged in and their role matches the required role
        if (Auth::check() && Auth::user()->role === $role) {
            return $next($request); // Continue the request
        }

        // Role-based redirection
        if (Auth::user()->role === 'admin') {
            return redirect()->route('AdminPanel.dashboard'); 
        } elseif (Auth::user()->role === 'user') {
            return redirect()->route('Electronics Mart.Home'); 
        } 

        return redirect()->route('login'); // Redirect to login if role doesn't match
    }

    public function terminate(Request $request, Response $response): void
    {
      
    }
}
