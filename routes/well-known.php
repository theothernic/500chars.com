<?php

    Route::prefix('.well-known')->group(function () {
        Route::get('webfinger', \App\Http\Controllers\WellKnown\WebfingerController::class)->name('webfinger');
    });
