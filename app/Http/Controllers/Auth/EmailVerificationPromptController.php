<?php

namespace App\Http\Controllers\Auth;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     */
    public function __invoke(Request $request): RedirectResponse|View
    {
        if ($request->user()->hasVerifiedEmail()) {
            notyf()->addSuccess('Email Verified Successfully.');

            if ($request->user()->hasRole('super-admin') || $request->user()->hasRole('admin')) {
                return redirect()->intended(RouteServiceProvider::ADMIN_DASHBOARD);
            } elseif ($request->user()->hasRole('tutor')) {
                return redirect()->intended(RouteServiceProvider::TUTOR_DASHBOARD);
            } elseif ($request->user()->hasRole('student')) {
                return redirect()->intended(RouteServiceProvider::STUDENT_DASHBOARD);
            }
        }

        return view('auth.verify-email');
    }
}
