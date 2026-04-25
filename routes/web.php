<?php

use App\Http\Controllers\auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/auth')->group( function () {
    Route::get('/register', [RegisterController::class, 'create'])
        ->name('register.create');
    Route::post('/register', [RegisterController::class, 'store'])
        ->name('register.store');
});
