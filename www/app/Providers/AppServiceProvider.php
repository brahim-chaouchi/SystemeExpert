<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../vendor/almasaeed2010/adminlte/dist/' => public_path('ext/dist'),
            __DIR__.'/../../vendor/twbs/bootstrap/dist/' => public_path('ext/bootstrap'),
            __DIR__.'/../../vendor/fortawesome/font-awesome/' => public_path('ext/font-awesome-4.7.0'),
            __DIR__.'/../../vendor/driftyco/ionicons/' => public_path('ext/ionicons-2.0.1'),
            __DIR__.'/../../vendor/almasaeed2010/adminlte/plugins/' => public_path('ext/plugins'),
            __DIR__.'/../../resources/assets/font/' => public_path('ext/font')
        ], 'adminlte');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
