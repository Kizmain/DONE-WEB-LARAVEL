<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ForumController;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
    Route::resource('tugas', TugasController::class);
    Route::resource('mataKuliah', MataKuliahController::class);
    Route::resource('profiles', ProfileController::class);
    Route::resource('forums', ForumController::class);
    Route::post('/forums/{forum}/comments', [CommentController::class, 'store'])->name('comments.store');
});

require __DIR__.'/auth.php';
