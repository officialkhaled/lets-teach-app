<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use App\Actions\PopulateRoleWiseTableAction;
use Illuminate\Validation\ValidationException;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        try {
            $request->validate([
                'name' => ['required', 'string'],
                'email' => ['required', 'string', 'lowercase', 'email', 'unique:' . User::class],
                'password' => ['required', 'confirmed'],
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            event(new Registered($user));

            (new PopulateRoleWiseTableAction())->execute($user);

            Auth::login($user);

            if ($user->hasRole('super-admin') || $user->hasRole('admin')) {
                return redirect()->intended(RouteServiceProvider::ADMIN_DASHBOARD);
            } elseif ($user->hasRole('tutor')) {
                return redirect()->intended(RouteServiceProvider::TUTOR_DASHBOARD);
            } elseif ($user->hasRole('student')) {
                return redirect()->intended(RouteServiceProvider::STUDENT_DASHBOARD);
            }
        } catch (\Exception $e) {
            \Log::error('Error during user registration: ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'An error occurred during registration.']);
        }
    }
}
