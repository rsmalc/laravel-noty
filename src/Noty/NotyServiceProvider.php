<?php

namespace RSmalc\Noty;

use Illuminate\Support\ServiceProvider;

class NotyServiceProvider extends ServiceProvider
{

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views/noty-template.blade.php', 'noty');

        $this->publishes([
            __DIR__.'/../../config/laravel-noty.php' => config_path('laravel-noty.php'),
        ]);
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \RSmalc\Noty\NotySessionInterface::class,
            \RSmalc\Noty\NotySessionStore::class
        );

        $this->app->singleton('noty', function () {
            return $this->app->make('\RSmalc\Noty\NotySessionStore');
        });
    }
}