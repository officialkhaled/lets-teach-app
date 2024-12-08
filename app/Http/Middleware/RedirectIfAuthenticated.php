<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
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
                    return redirect()->intended(RouteServiceProvider::ADMIN_DASHBOARD);
                } else if ($user->role === 1) {
                    return redirect()->intended(RouteServiceProvider::TUTOR_DASHBOARD);
                } else {
                    return redirect()->intended(RouteServiceProvider::STUDENT_DASHBOARD);
                }
            }
        }
        
        return $next($request);
    }
}
