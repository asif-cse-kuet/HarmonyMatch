<?php


use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

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




Route::get('/products', [ProductController::class, 'showProducts'])->name('products.index');
Route::get('/products/search', [ProductController::class, 'showProducts'])->name('products.search');

Route::get('/search', [ProfileController::class, 'showProfile'])->name('profiles.search');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
