<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use App\Actions\PopulateRoleWiseTableAction;

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
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        try {
            $request->validate([
                'name' => ['required', 'string'],
                'email' => ['required', 'string', 'lowercase', 'email', 'unique:' . User::class],
                'role' => ['required'],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);
            
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role,
                'password' => Hash::make($request->password),
            ]);
            
            event(new Registered($user));
            
            (new PopulateRoleWiseTableAction())->execute($user);
            
            Auth::login($user);
            
            return redirect(RouteServiceProvider::HOME);
        } catch (\Exception $e) {
            \Log::error('Error during user registration: ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'An error occurred during registration.']);
        }
    }
}
