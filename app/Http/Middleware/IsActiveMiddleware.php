<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Session;

class IsActiveMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
         if (Auth::check())
         {
             if (Auth::user()->is_active == true)
            {
            return $next($request);
            }
        
            Auth::logout();
            Session::flush();
            return redirect('login')->with('message', 'not activated');
         }

         return $next($request);

    }
}
