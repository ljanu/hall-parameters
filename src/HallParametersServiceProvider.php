<?php
declare(strict_types=1);


namespace Tudy\HallParameters;

use Illuminate\Support\ServiceProvider;
use Route;
use Tudy\HallParameters\Http\Controllers\HallParameters\Http\Middleware\HallParameters;


class HallParametersServiceProvider extends ServiceProvider
{

    public function boot()
    {
        // translate route resources
        Route::resourceVerbs([
            'show'   => 'zobrazit',
            'create' => 'vytvorit',
            'edit'   => 'upravit',
        ]);


        //register routs
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        $this->app['router']->aliasMiddleware(
            'hall-parameters', HallParameters::class
        );

        //register views
        $this->loadViewsFrom(__DIR__ . '/views', 'hall-parameters');

        //register configuration
        $this->mergeConfigFrom(__DIR__ . '/config/hall.php', 'config_hall');

        //register translate
        $this->loadTranslationsFrom(__DIR__ . '/resources/lang', 'hall-parameters');

        $this->publishes([
            __DIR__.'/resources/lang' => resource_path('lang/'),
        ]);

    }




    public function register()
    {

    }

}