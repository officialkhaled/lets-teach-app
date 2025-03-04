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
     * @param \Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $user = Auth::user();

                if ($user->hasRole('super-admin') || $user->hasRole('admin')) {
                    return redirect()->intended(RouteServiceProvider::ADMIN_DASHBOARD);
                } elseif ($user->hasRole('tutor')) {
                    return redirect()->intended(RouteServiceProvider::TUTOR_DASHBOARD);
                } elseif ($user->hasRole('student')) {
                    return redirect()->intended(RouteServiceProvider::STUDENT_DASHBOARD);
                }
            }
        }

        return $next($request);
    }
}
