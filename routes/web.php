<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\home\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::prefix('/auth')->group( function () {
    Route::get('/register', [RegisterController::class, 'create'])
        ->name('auth.create');
    Route::post('/register', [RegisterController::class, 'store'])
        ->name('auth.store');
    Route::get('/login', [LoginController::class, 'index'])
        ->name('auth.index');
    Route::post('/login', [LoginController::class, 'login'])
        ->name('auth.login');
    Route::post('/logout', [LoginController::class, 'logout'])
        ->name('auth.logout');

});
