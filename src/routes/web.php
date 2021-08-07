<?php

use Tudy\HallParameters\Http\Controllers\HallParametersController;
use Tudy\HallParameters\Http\Controllers\Specification\ConstructionController;
use Tudy\HallParameters\Http\Controllers\Specification\SpecificationController;

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

        //specification
        Route::resource('specification', SpecificationController::class)
            ->except('index', "show", 'destroy')
            ->names([
                'create'  => 'specification.create',
                'store'   => 'specification.store',
                'edit'    => 'specification.edit',
                'update'  => 'specification.update',
            ]);

        //main
        Route::get('/', [HallParametersController::class, 'index'])
            ->name('h-p-en.index');

        Route::get('/{hall_id}', [HallParametersController::class, 'show'])
            ->name('h-p-en.show');


    });


    /*---------------  lang cs --------------------------------------------- */

    Route::prefix('hala-parametry')->group(function () {

        //construction
        Route::resource('konstrukce', ConstructionController::class)
            ->except('index', "show", 'store',"update", 'destroy')
            ->names([
                'create'  => 'konstrukce.create',
                'edit'    => 'konstrukce.edit',
            ]);

        //specification
        Route::resource('specifikace', SpecificationController::class)
            ->except('index', "show", 'destroy')
            ->names([
                'create'  => 'specifikace.create',
                'store'   => 'specifikace.store',
                'edit'    => 'specifikace.edit',
                'update'  => 'specifikace.update',
            ]);

        //main
        Route::get('/', [HallParametersController::class, 'index'])
            ->name('h-p-cs.index');

        Route::get('/{hall_id}', [HallParametersController::class, 'show'])
            ->name('h-p-cs.show');

    });

});