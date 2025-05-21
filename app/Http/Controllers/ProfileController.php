<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Auth::user(); // Mengambil data user yang sedang login
        return view('profiles.index', compact('profile'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('profiles.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
        ]);

        $user->update($request->only(['name', 'email']));

        return redirect()->route('profiles.show')->with('success', 'Profil berhasil diperbarui.');
    }
}
