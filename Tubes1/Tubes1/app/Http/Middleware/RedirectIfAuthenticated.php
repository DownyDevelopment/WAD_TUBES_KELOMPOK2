<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next, string ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                if (Auth::user()->hasRole('admin')) {
                    return redirect()->route('dashboard');
                }
                return redirect()->route('login')->with('error', 'You do not have permission to access this page.');
            }
        }

        return $next($request);
    }
} 