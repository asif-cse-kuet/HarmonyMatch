<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;

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
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    public function showProfile(Request $request)
    {

        $gender = $request->input('gender');
        $marital_status = $request->input('marital_status');
        $divisions = $request->input('divisions');
        $profiles = User::query();

        if ($gender) {
            $profiles->where('gender', $gender);
        }
        if ($marital_status) {
            $profiles->where('marital_status', $marital_status);
        }

        if ($divisions) {
            $profiles->where('division', $divisions);
        }

        $profileDetails = $profiles->get();
        return view('welcome', ['profiles' => $profileDetails]);
    }

    // Show profiles on dashboard
    public function showProfileActive(Request $request)
    {
        $gender = $request->input('gender');
        $marital_status = $request->input('marital_status');
        $divisions = $request->input('divisions');
        $profiles = User::query();

        if ($gender) {
            $profiles->where('gender', $gender);
        }
        if ($marital_status) {
            $profiles->where('marital_status', $marital_status);
        }

        if ($divisions) {
            $profiles->where('division', $divisions);
        }

        $profileDetails = $profiles->get();
        return view('dashboard', ['profiles' => $profileDetails]);
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
