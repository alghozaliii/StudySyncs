<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class ProfileController extends Controller
{
    //// app/Http/Controllers/ProfileController.php
    public function edit()
    {
        return Inertia::render('Profile/Edit', [
            'user' => Auth::user(),
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'birthdate' => 'nullable|date',
        ]);

        $user = Auth::user();
        $user->update($request->only('name', 'email', 'address', 'phone', 'birthdate'));

        return Inertia::render('Profile/Edit', [
            'user' => $user,
            'success' => 'Profile updated successfully',
        ]);
    }

    public function destroy()
    {
        $user = Auth::user();
        $user->delete();

        // Log out the user after deleting their account
        Auth::logout();

        // Redirect ke halaman utama atau login page setelah menghapus akun
        return redirect()->route('login')->with('status', 'Your account has been deleted successfully.');
    }

}
