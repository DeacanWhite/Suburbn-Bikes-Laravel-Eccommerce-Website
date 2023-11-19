<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

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
//    public function edit(Request $request): View
//    {
//        $user = $request->user();
//
//        // 检查用户角色并传递相应的数据到视图
//        if ($user->isManager()) {
//            // 对于 manager，传递特定的数据
//            return view('profile.edit', [
//                'user' => $user,
//                'additionalData' => 'Manager-specific data'
//            ]);
//        } elseif ($user->isStaff()) {
//            // 对于 staff，传递不同的数据
//            return view('profile.edit', [
//                'user' => $user,
//                'additionalData' => 'Staff-specific data'
//            ]);
//        } else {
//            // 对于普通 client，传递基本数据
//            return view('profile.edit', [
//                'user' => $user
//            ]);
//        }
//    }

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
