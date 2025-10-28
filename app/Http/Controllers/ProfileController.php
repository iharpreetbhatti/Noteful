<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ProfileController extends Controller
{
    // @desc Load User profile view
    public function index(): View
    {
        return view("pages.profile");
    }

    // @desc Update User profile
    public function update(Request $request): RedirectResponse
    {
        $user = Auth::user();

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            // 'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user->update($validatedData);

        return redirect()->route('profile')->with('success', 'User Info Updated Successfully');
    }
}
