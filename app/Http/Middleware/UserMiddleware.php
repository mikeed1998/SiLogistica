<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    public function handle($request, Closure $next)
    {
        if(Auth::check()) 
        {
            if(Auth::user()->role_as == '0')
            {
                return $next($request);
            }
            else 
            {
                return redirect('/');
            }
        }
        else 
        {
            return redirect('/')->with('status', 'Inicia sesión primero');
        }
    }
}
