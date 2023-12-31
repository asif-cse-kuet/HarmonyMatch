<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/questions', function () {
    return view('Guest/question');
})->name('questions');


Route::get('/amader_somporke', function () {
    return view('Guest/amader_somporke');
})->name('amader_somporke');


Route::get('/nirdeshona', function () {
    return view('Guest/nirdeshona');
})->name('nirdeshona');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/search', [ProfileController::class, 'showProfile'])->name('profiles.search');

Route::get('/search/active', [ProfileController::class, 'showProfileActive'])->name('profiles_active.search');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/details', [ProfileController::class, 'profileDetails'])->name('profile.details');
});

require __DIR__ . '/auth.php';
