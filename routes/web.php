<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\slideshowController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/services', function () {
    return view('services.index');
})->name('services');

Route::get('/services/dental', function () {
    return view('services.dental');
})->name('services.dental');

Route::get('/services/psychiatry', function () {
    return view('services.psychiatry');
})->name('services.psychiatry');

Route::get('/services/psychology', function () {
    return view('services.psychology');
})->name('services.psychology');
require __DIR__ . '/auth.php';
