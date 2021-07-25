<?php

use Tudy\HallParameters\Http\Controllers\HallParametersController;

Route::middleware('web')->group(function () {

    // lang en
    Route::prefix('hall-parameters')->group(function () {

        Route::get('/', [HallParametersController::class, 'index'])
            ->name('h-p-en.index');

        Route::get('/{hall_id}', [HallParametersController::class, 'show'])
            ->name('h-p-en.show');

    });

    //lang cs
    Route::prefix('hala-parametry')->group(function () {

        Route::get('/', [HallParametersController::class, 'index'])
            ->name('h-p-cs.index');

        Route::get('/{hall_id}', [HallParametersController::class, 'show'])
            ->name('h-p-cs.show');

    });

});