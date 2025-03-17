<?php

namespace App\Http\Controllers\Auth;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
        $request->session()->regenerate();

        $user = Auth::user();

        notyf()->addSuccess('User Signed In Successfully.');

        if ($user->hasRole('super-admin') || $user->hasRole('admin')) {
            return redirect()->intended(RouteServiceProvider::ADMIN_DASHBOARD);
        } elseif ($user->hasRole('tutor')) {
            return redirect()->intended(RouteServiceProvider::TUTOR_DASHBOARD);
        } elseif ($user->hasRole('student')) {
            return redirect()->intended(RouteServiceProvider::STUDENT_DASHBOARD);
        }

        return redirect()->route('home');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        notyf()->addSuccess('User Signed Out Successfully.');

        return redirect('/login');
    }
}
