<?php

use Tudy\HallParameters\Http\Controllers\HallParameters\Http\Controllers\ParametersControllers;
use Tudy\HallParameters\Http\Controllers\HallParametersController;

Route::middleware('web')->group(function () {

    Route::prefix('hall-parameters')->group(function () {

        Route::get('/', [HallParametersController::class, 'index'])
            ->name('h-p.index');

        Route::get('/{hall_id}', [HallParametersController::class, 'show'])
            ->name('h-p.show');

    });


    // language en
//    Route::resource('hall-parameters', ParametersControllers::class)
//        ->names([
//            'index'   => 'hall-parameters.index',
//            'show'    => 'hall-parameters.show',
//            'create'  => 'hall-parameters.create',
//            'store'   => 'hall-parameters.store',
//            'edit'    => 'hall-parameters.edit',
//            'update'  => 'hall-parameters.update',
//            'destroy' => 'hall-parameters.destroy',
//        ])->middleware('hall-parameters');

    // language cs
    Route::resource('hala-parametry', ParametersControllers::class)
        ->except('store', 'update', 'destroy')
        ->names([
            'index'  => 'hala-parametry.index',
            'show'   => 'hala-parametry.show',
            'create' => 'hala-parametry.create',
            'edit'   => 'hala-parametry.edit',
        ]);

});