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

    //Tendriem que fer un manualaut service provider
    public function boot()
    {
        //Configurable de forma que ens tocarà canviar el fitxer de configuració.
        $this->app->bind(\App\ManualAuth\Guard::class, config('manualauth.guard'));
        //$this->app->bind(\App\ManualAuth\Guard::class, \App\ManualAuth\ParameterGuard::class);

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
