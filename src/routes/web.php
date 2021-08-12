<?php

use Tudy\HallParameters\Http\Controllers\HallParametersController;
use Tudy\HallParameters\Http\Controllers\Specification\CladdingDimensionController;
use Tudy\HallParameters\Http\Controllers\Specification\CladdingTypeController;
use Tudy\HallParameters\Http\Controllers\Specification\ConstructionController;
use Tudy\HallParameters\Http\Controllers\Specification\ContactController;
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
                'store'  => 'specification.store',
                'create' => 'specification.create',
                'edit'   => 'specification.edit',
                'update' => 'specification.update',
            ]);

        //cladding dimension
        Route::resource('cladding-dimension', CladdingDimensionController::class)
            ->except('index', "show", 'destroy')
            ->names([
                'create' => 'cladding-dimension.create',
                'store'  => 'cladding-dimension.store',
                'edit'   => 'cladding-dimension.edit',
                'update' => 'cladding-dimension.update',
            ]);

        //cladding type
        Route::resource('cladding-type', CladdingTypeController::class)
            ->except('index', "show", 'destroy')
            ->names([
                'create' => 'cladding-type.create',
                'store'  => 'cladding-type.store',
                'edit'   => 'cladding-type.edit',
                'update' => 'cladding-type.update',
            ]);

        //contact
        Route::resource('contact', ContactController::class)
            ->except('index', "show", 'destroy')
            ->names([
                'create' => 'contact.create',
                'store'  => 'contact.store',
                'edit'   => 'contact.edit',
                'update' => 'contact.update',
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
                'create' => 'specifikace.create',
                'edit'   => 'specifikace.edit',
            ]);

        //cladding dimension
        Route::resource('rozmery-oplasteni', CladdingDimensionController::class)
            ->except('index', "show", 'destroy')
            ->names([
                'create' => 'rozmery-oplasteni.create',
                'edit'   => 'rozmery-oplasteni.edit',
            ]);

        //cladding type
        Route::resource('typ-oplasteni', CladdingTypeController::class)
            ->except('index', "show", 'destroy')
            ->names([
                'create' => 'typ-oplasteni.create',
                'edit'   => 'typ-oplasteni.edit',
            ]);

        //contact
        Route::resource('kontakt', ContactController::class)
            ->except('index', "show", 'destroy')
            ->names([
                'create' => 'kontakt.create',
                'edit'   => 'kontakt.edit',
            ]);

        //main
        Route::get('/', [HallParametersController::class, 'index'])
            ->name('h-p-cs.index');

        Route::get('/{hall_id}', [HallParametersController::class, 'show'])
            ->name('h-p-cs.show');

    });

});