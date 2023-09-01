<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
    require 'well-known.php';

    Route::prefix('@{account}')->group(function () {
        Route::get('/', \App\Http\Controllers\Account\ProfileController::class)->name('account.profile');
    });


