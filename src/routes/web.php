<?php

use Tudy\HallParameters\Http\Controllers\HallParametersController;
use Tudy\HallParameters\Http\Controllers\Specification\ConstructionController;

Route::middleware('web')->group(function () {

    /*---------------  lang en --------------------------------------------- */
    Route::prefix('hall-parameters')->group(function () {

        //main
        Route::get('/', [HallParametersController::class, 'index'])
            ->name('h-p-en.index');

        Route::get('/{hall_id}', [HallParametersController::class, 'show'])
            ->name('h-p-en.show');

        //construction
        Route::resource('construction', ConstructionController::class)
            ->except('index', "show", 'destroy')
            ->names([
                'create'  => 'construction.create',
                'store'   => 'construction.store',
                'edit'    => 'construction.edit',
                'update'  => 'construction.update',
            ]);

    });


    /*---------------  lang cs --------------------------------------------- */

    Route::prefix('hala-parametry')->group(function () {

        //main
        Route::get('/', [HallParametersController::class, 'index'])
            ->name('h-p-cs.index');

        Route::get('/{hall_id}', [HallParametersController::class, 'show'])
            ->name('h-p-cs.show');

        //construction
        Route::resource('konstrukce', ConstructionController::class)
            ->except('index', "show", 'destroy')
            ->names([
                'create'  => 'konstrukce.create',
                'store'   => 'konstrukce.store',
                'edit'    => 'konstrukce.edit',
                'update'  => 'konstrukce.update',
            ]);

    });

});