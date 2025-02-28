<?php


namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminUserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        // Check if the user is authenticated
        if (Auth::check()) {
            return $next($request); 
        }

        // User is not authenticated; log them out and redirect
        Auth::logout();
        return redirect(url(('dashboard'))); 
    }
}
