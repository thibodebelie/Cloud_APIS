<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/menu', [ApiController::class, 'getMenu']);



// Profile routes   (SOAP API)

// Route::get('/add-profile', function () {
//     return view('/profiles/addProfile');
// });

// Route::post('/add-profile', [ProfileController::class, 'store'])->name('add-profile.store');
Route::get('/profiles', [ProfileController::class, 'getAllProfiles'])->name('profiles.index');


// Route::get('/profiles', [ProfileController::class, 'getAllProfiles'])->name('profiles.index');
// Route::get('/profiles/create', [ProfileController::class, 'create'])->name('profiles.create');
// Route::post('/profiles', [ProfileController::class, 'store'])->name('profiles.store');






















// Route::get('/profiles', [ProfileController::class, 'index'])->name('profiles.index');
// Route::post('/profiles', [ProfileController::class, 'store'])->name('profiles.store');


// Route::get('/profiles', [ProfileController::class, 'index'])->name('profiles.index');
// Route::get('/profiles/add', [ProfileController::class, 'create'])->name('profiles.create');
// Route::post('/profiles', [ProfileController::class, 'store'])->name('profiles.store');



// 6 December ==> werkt niet

// Route::get('/profiles', function (ProfileService $service) {
//     $profiles = $service->getAllProfiles();
//     return response()->json($profiles);
// });

// Route::post('/profiles', function (Request $request, ProfileService $service) {
//     $profile = $request->only(['Name', 'Email', 'Phone', 'Address', 'Birthdate']);
//     $result = $service->createProfile($profile);
//     return response()->json(['success' => $result]);
// });
