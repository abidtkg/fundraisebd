<?php

use App\Http\Controllers\WebpageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

// WEB PAGE ROUTES
Route::get('/', [WebpageController::class, 'index'])->name('webpage.index');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
