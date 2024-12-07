<?php

namespace App\Http\Controllers;

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
}
