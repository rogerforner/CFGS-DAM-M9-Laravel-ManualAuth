<?php

namespace App\Providers;

use App\ManualAuth\Guard;
use App\ManualAuth\UserProviders\UserProvider;
use Illuminate\Support\ServiceProvider;

class ManualAuthServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        //Configurable de forma que ens tocarà canviar el fitxer de configuració.
        $this->app->bind(Guard::class, config('manualauth.guard'));
        $this->app->bind(UserProvider::class, config('manualauth.user'));

        //$this->app->bind(\App\ManualAuth\Guard::class, \App\ManualAuth\ParameterGuard::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
