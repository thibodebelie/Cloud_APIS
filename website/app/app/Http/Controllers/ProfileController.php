<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProfileService;

class ProfileController extends Controller
{
    protected $profileService;

    public function __construct(ProfileService $profileService)
    {
        $this->profileService = $profileService;
    }

    public function getAllProfiles()
    {
        try {
            // Get profiles from the service
            $profiles = $this->profileService->getAllProfiles();

            // Pass profiles to the view
            return view('profiles.index', compact('profiles'));
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    public function create()
    {
        return view('profiles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Address' => 'required|string|max:255',
            'Birthdate' => 'required|date',
            'Email' => 'required|email|max:255',
            'Id' => 'required|integer',
            'Name' => 'required|string|max:255',
            'Phone' => 'required|string|max:15',
        ]);

        try {
            $this->profileService->createProfile($request->all());
            return redirect()->route('profiles.index')->with('success', 'Profile created successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
