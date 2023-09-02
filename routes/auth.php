<?php

    use Illuminate\Support\Facades\Route;

    Route::get('login', \App\Http\Controllers\Auth\LoginController::class)->name('login');
    Route::post('login', [\App\Http\Controllers\Auth\LoginController::class, 'handle'])->name('login.handle');
