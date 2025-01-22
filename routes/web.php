<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\WebpageController;
use App\Http\Middleware\AdminGuard;
use App\Http\Middleware\UserGuard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

// WEB PAGE ROUTES
Route::get('/', [WebpageController::class, 'index'])->name('webpage.index');
Route::get('/contact', [WebpageController::class, 'contact'])->name('webpage.contact');
Route::get('/profile', [WebpageController::class, 'profile'])->middleware([UserGuard::class])->name('webpage.profile');


Route::get('/home', function() {
    return redirect()->route('webpage.profile');
})->name('home');


Route::prefix('admin')->name('admin.')->middleware([AdminGuard::class])->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// REDIRECTED IF TYPED ONLY [/ADMIN] IN URL BAR
Route::get('/admin', function () {
    return redirect()->route('admin.dashboard');
});