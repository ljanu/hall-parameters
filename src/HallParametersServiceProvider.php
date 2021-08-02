<?php
declare(strict_types=1);


namespace Tudy\HallParameters;

use App;
use Illuminate\Support\ServiceProvider;
use Route;
use Tudy\HallParameters\Http\Middleware\HallParameters;


class HallParametersServiceProvider extends ServiceProvider
{

    public function boot()
    {
        // translate route resources

        if (App::isLocale('cs')) {
            Route::resourceVerbs([
                'show'   => 'zobrazit',
                'create' => 'vytvorit',
                'edit'   => 'upravit',
            ]);
        }



        //register routs
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        $this->app['router']->aliasMiddleware(
            'hall-parameters', HallParameters::class
        );

        //register views
        $this->loadViewsFrom(__DIR__ . '/views', 'hall-parameters');

        //register configuration
        $this->mergeConfigFrom(__DIR__ . '/config/hall_parameters.php', 'config_hall');

        //register translate
        $this->loadTranslationsFrom(__DIR__ . '/resources/lang', 'hall-parameters');

        $this->publishes([__DIR__ . '/resources/lang' => resource_path('lang/')],
            'lang'
        );

        $this->publishes([__DIR__ . '/config/hall_parameters.php' => config_path('hall_parameters.php')],
            'config');

        $this->publishes([__DIR__.'/resources/images/hall-parameters/icons' =>
                              public_path('images/hall-parameters/')],
        'icons');

    }




    public function register()
    {

    }

}