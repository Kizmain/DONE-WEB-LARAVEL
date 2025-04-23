<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::first(); // Ambil data pertama
        return view('profiles.index', compact('profile'));
    }

    public function create()
    {
        return view('profiles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
        ]);

        Profile::create($validated + $request->except('_token'));

        return redirect('/')->with('success', 'Profile created!');
    }

    public function edit(Profile $profile)
    {
        return view('profiles.edit', compact('profile'));
    }

    public function update(Request $request, Profile $profile)
    {
        $validated = $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
        ]);

        $profile->update($validated + $request->except('_token', '_method'));

        return redirect('/')->with('success', 'Profile updated!');
    }

    public function destroy(Profile $profile)
    {
        $profile->delete();
        return redirect('/')->with('success', 'Profile deleted!');
    }
}