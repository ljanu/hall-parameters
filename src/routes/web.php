<?php

use Tudy\HallParameters\Http\Controllers\HallParametersController;
use Tudy\HallParameters\Http\Controllers\Specification\ConstructionController;
use Tudy\HallParameters\Http\Controllers\Specification\MetadataController;

Route::middleware('web')->group(function () {

    /*---------------  lang en --------------------------------------------- */
    Route::prefix('hall-parameters')->group(function () {


        //construction
        Route::resource('construction', ConstructionController::class)
            ->except('index', "show", 'destroy')
            ->names([
                'create'  => 'construction.create',
                'store'   => 'construction.store',
                'edit'    => 'construction.edit',
                'update'  => 'construction.update',
            ]);

        //metadata
        Route::resource('metadata', MetadataController::class)
            ->except('index', "show", 'destroy')
            ->names([
                'create'  => 'metadata.create',
                'store'   => 'metadata.store',
                'edit'    => 'metadata.edit',
                'update'  => 'metadata.update',
            ]);

        //main
        Route::get('/', [HallParametersController::class, 'index'])
            ->name('h-p-en.index');

        Route::get('/{hall_id}', [HallParametersController::class, 'show'])
            ->name('h-p-en.show');


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
            ->except('index', "show", 'store',"update", 'destroy')
            ->names([
                'create'  => 'konstrukce.create',
                'edit'    => 'konstrukce.edit',
            ]);

        //metadata not lang cs use metadata lang en

    });

});