<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\UserController;
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


Route::get('/auth_land', function() {
    if(Auth::user()->role == 'admin'){
        return redirect()->route('admin.dashboard');
    }else {
        Auth::logout();
        return redirect()->route('login')->with('error', 'You do not have admin access');
    }
});


Route::prefix('admin')->name('admin.')->middleware([AdminGuard::class])->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // ADMIN MANGEMENT
    Route::get('/admins', [UserController::class, 'admins'])->name('admin.index');
    Route::get('/admin/create', [UserController::class, 'create_admin'])->name('admin.create');
});

// REDIRECTED IF TYPED ONLY [/ADMIN] IN URL BAR
Route::get('/admin', function () {
    return redirect()->route('admin.dashboard');
});