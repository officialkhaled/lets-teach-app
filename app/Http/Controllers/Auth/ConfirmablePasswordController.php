<?php

namespace App\Http\Controllers\Auth;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use Illuminate\Validation\ValidationException;

class ConfirmablePasswordController extends Controller
{
    /**
     * Show the confirm password view.
     */
    public function show(): View
    {
        return view('auth.confirm-password');
    }

    /**
     * Confirm the user's password.
     */
    public function store(Request $request): RedirectResponse
    {
        if (!Auth::guard('web')->validate([
            'email' => $request->user()->email,
            'password' => $request->password,
        ])) {
            throw ValidationException::withMessages([
                'password' => __('auth.password'),
            ]);
        }

        $request->session()->put('auth.password_confirmed_at', time());

        $user = Auth::user();

        notyf()->addSuccess('Password Confirmed Successfully.');

        if ($user->hasRole('super-admin') || $user->hasRole('admin')) {
            return redirect()->intended(RouteServiceProvider::ADMIN_DASHBOARD);
        } elseif ($user->hasRole('tutor')) {
            return redirect()->intended(RouteServiceProvider::TUTOR_DASHBOARD);
        }

        return redirect()->intended(RouteServiceProvider::STUDENT_DASHBOARD);
    }
}
