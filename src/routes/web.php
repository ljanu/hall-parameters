<?php

use Tudy\HallParameters\Http\Controllers\ParametersControllers;

Route::middleware('web')->group(function () {

    // language en
    Route::resource('hall-parameters', ParametersControllers::class)
        ->names([
            'index'   => 'hall-parameters.index',
            'show'    => 'hall-parameters.show',
            'create'  => 'hall-parameters.create',
            'store'   => 'hall-parameters.store',
            'edit'    => 'hall-parameters.edit',
            'update'  => 'hall-parameters.update',
            'destroy' => 'hall-parameters.destroy',
        ]);

    // language cs
    Route::resource('hala-parametry', ParametersControllers::class)
        ->except('store','update','destroy')
        ->names([
            'index'   => 'hala-parametry.index',
            'show'    => 'hala-parametry.show',
            'create'  => 'hala-parametry.create',
    //        'store'   => 'hala-parametry.store',
            'edit'    => 'hala-parametry.edit',
      //      'update'  => 'hala-parametry.update',
        //    'destroy' => 'hala-parametry.destroy',
        ]);

});