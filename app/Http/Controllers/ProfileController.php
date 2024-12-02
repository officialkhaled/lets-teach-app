<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }
    
    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();
        $user->fill($request->validated());
        
        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }
        
        if ($request->image) {
            $imageName = "images/" . time() . '.' . $request->image->extension();
            $request->image->move(storage_path('app/public/images'), $imageName);
            
            $user->image = $imageName;
        }
        
        $user->save();
        
        if ($user->role === 0) {
            return Redirect::route('admin.profile.edit')->with('status', 'profile-updated');
        } else if ($user->role === 1) {
            return Redirect::route('tutor.profile.edit')->with('status', 'profile-updated');
        } else {
            return Redirect::route('student.profile.edit')->with('status', 'profile-updated');
        }
    }
    
    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);
        
        $user = $request->user();
        
        Auth::logout();
        
        $user->delete();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return Redirect::to('/');
    }
}
