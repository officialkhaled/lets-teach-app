<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;

class EmailVerificationNotificationController extends Controller
{
    /**
     * Send a new email verification notification.
     */
    public function store(Request $request): RedirectResponse
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

        $request->user()->sendEmailVerificationNotification();

        return back()->with('status', 'verification-link-sent');
    }
}
