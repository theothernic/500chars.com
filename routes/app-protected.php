<?php

    Route::middleware('auth')->prefix('app')->group(function () {
       Route::resources([
           'accounts' => \App\Http\Controllers\Account\AccountResourceController::class
       ]);
    });
