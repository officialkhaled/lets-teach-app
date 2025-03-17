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
        try {
            currentUser()->fill($request->validated());

            if (currentUser()->isDirty('email')) {
                currentUser()->email_verified_at = null;
            }

            if ($request->avatar) {
                $imageName = "images/" . time() . '.' . $request->avatar->extension();
                $request->avatar->move(storage_path('app/public/images'), $imageName);

                currentUser()->avatar = $imageName;
            }

            currentUser()->save();

            notyf()->addSuccess('Profile Updated Successfully.');

            if (currentUser()->hasRole('super-admin') || currentUser()->hasRole('admin')) {
                return Redirect::route('admin.admin-dashboard')->with('success', 'Profile Updated Successfully.');
            } else if (currentUser()->hasRole('tutor')) {
                return Redirect::route('tutor.tutor-dashboard')->with('success', 'Profile Updated Successfully.');
            } else {
                return Redirect::route('student.student-dashboard')->with('success', 'Profile Updated Successfully.');
            }
        } catch (\Exception $exception) {
            notyf()->addError($exception->getMessage());

            return redirect()->back();
        }
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        try {
            $request->validateWithBag('userDeletion', [
                'password' => ['required', 'current_password'],
            ]);

            $user = $request->user();

            Auth::logout();

            $user->delete();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            notyf()->addSuccess('Profile Updated Successfully.');

            return Redirect::to('/');
        } catch (\Exception $exception) {
            notyf()->addError($exception->getMessage());

            return redirect()->back();
        }
    }
}
