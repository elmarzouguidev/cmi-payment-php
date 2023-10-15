<?php

namespace Elmarzouguidev\CMI;

use Illuminate\Auth\Events\Logout;
use Illuminate\Session\SessionManager;
use Illuminate\Support\ServiceProvider;

class LaravelCMIServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('CMI', 'Elmarzouguidev\CMI\CMIClient');

        $config = __DIR__.'/Config/laravel-cmi.php';
        $this->mergeConfigFrom($config, 'laravel-cmi');

        $this->publishes([__DIR__.'/Config/laravel-cmi.php' => config_path('laravel-cmi.php')], 'config');
    }
}
