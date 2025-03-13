<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

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
    public function update(Request $request): RedirectResponse
    {
        $user = $request->user();

        // Kiểm tra loại form được gửi
        if ($request->input('form_type') === 'profile_update') {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id],
                'address' => ['nullable', 'string', 'max:255'],
                'phone' => ['nullable', 'string', 'max:20'],
            ]);

            $user->fill($request->only(['name', 'email', 'address', 'phone']));

            if ($user->isDirty('email')) {
                $user->email_verified_at = null;
            }

            $user->save();

            return Redirect::route('profile.edit')->with('status', 'profile-updated');
        }

        if ($request->input('form_type') === 'avatar_update') {
            $request->validate([
                'avt_url' => ['required', 'image', 'mimes:jpg,png,jpeg,gif', 'max:2048'], // 2MB
            ]);

            if ($request->hasFile('avt_url')) {
                // Xóa ảnh cũ nếu có
                if ($user->avt_url) {
                    Storage::disk('public')->delete($user->avt_url);
                }

                // Lưu ảnh mới
                $file = $request->file('avt_url');
                $filename = 'avt' . $user->id . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('avatars', $filename, 'public');
                $user->avt_url = 'avatars/' . $filename;
                $user->save();
            }

            return Redirect::route('profile.edit')->with('status', 'avatar-updated');
        }

        return Redirect::route('profile.edit')->with('status', 'error');
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
