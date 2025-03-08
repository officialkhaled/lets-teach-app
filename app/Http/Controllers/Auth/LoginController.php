<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Student;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    protected function _registerOrLoginUser($data)
    {
        $user = User::query()->firstWhere('email', $data->email);

        if (!$user) {
            $user = new User();

            $user->name = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->id;
            $user->avatar = $data->avatar;
            $user->password = Hash::make('123456');

            $user->save();
        }

        $roles = Role::query()->pluck('name', 'name')->toArray();
        $user->assignRole($roles['student']);

        Student::create([
            'user_id' => $user->id,
        ]);

        Auth::login($user);
    }

    //Google Login
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->stateless()->redirect();
    }

    //Google callback
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();

        $this->_registerorLoginUser($user);
        return redirect()->intended(RouteServiceProvider::STUDENT_DASHBOARD);
    }

    //Github Login
    public function redirectToGithub()
    {
        return Socialite::driver('github')->stateless()->redirect();
    }

    //github callback
    public function handleGithubCallback()
    {
        $user = Socialite::driver('github')->stateless()->user();

        $this->_registerorLoginUser($user);
        return redirect()->intended(RouteServiceProvider::STUDENT_DASHBOARD);
    }
}
