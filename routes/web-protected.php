<?php


    Route::middleware('auth')->group(function () {
        Route::get('dashboard', \App\Http\Controllers\User\DashboardController::class)->name('dashboard');
    });
