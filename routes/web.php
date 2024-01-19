<?php

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
    return view('frontend.welcome');
})->name('home');

// Route::get('/mainboard', function () {
//     return view('backend.mainboard');
// })->name('mainboard');

Route::get('/feedbacks', function () {
    return view('backend.feedbacks');
})->name('feedbacks');

Route::get('/request', function () {
    return view('backend.request');
})->name('request');




Route::get('/mainboard', function () {
    return view('backend.mainboard');
})->middleware(['auth', 'verified'])->name('mainboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
