<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;
        
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $user = Auth::user();
                
                if ($user->role === 0) {
                    return redirect()->intended(RouteServiceProvider::HOME_ADMIN);
                } else if ($user->role === 1) {
                    return redirect()->intended(RouteServiceProvider::HOME_TUTOR);
                } else {
                    return redirect()->intended(RouteServiceProvider::HOME_STUDENT);
                }
            }
        }
        
        return $next($request);
    }
}
