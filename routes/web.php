<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ProductController;



Route::resource('products', ProductController::class);
Route::get('/explore', function () {
    return view('explore');
});

Route::get('/map', function () {
    return view('map');
});

Route::get('/realtime_track', function () {
    return view('realtime_track');
});

Route::get('/pose', function () {
    return view('pose');
});

Route::get('/', function () {
    return view('welcome');
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified','normal'])
    ->name('dashboard');
Route::view('admin', 'admin')
    ->middleware(['auth', 'verified','admin'])
    ->name('admin');
Route::view('superadmin', 'superadmin')
    ->middleware(['auth', 'verified','superadmin'])
    ->name('superadmin');
Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
