<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Auth\Events\Verified;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            if ($request->user()->hasRole('super-admin') || $request->user()->hasRole('admin')) {
                return redirect()->intended(RouteServiceProvider::ADMIN_DASHBOARD . '?verified=1');
            } elseif ($request->user()->hasRole('tutor')) {
                return redirect()->intended(RouteServiceProvider::TUTOR_DASHBOARD . '?verified=1');
            } elseif ($request->user()->hasRole('student')) {
                return redirect()->intended(RouteServiceProvider::STUDENT_DASHBOARD . '?verified=1');
            }
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }

        if ($request->user()->hasRole('super-admin') || $request->user()->hasRole('admin')) {
            return redirect()->intended(RouteServiceProvider::ADMIN_DASHBOARD . '?verified=1');
        } elseif ($request->user()->hasRole('tutor')) {
            return redirect()->intended(RouteServiceProvider::TUTOR_DASHBOARD . '?verified=1');
        }

        return redirect()->intended(RouteServiceProvider::STUDENT_DASHBOARD . '?verified=1');
    }
}
