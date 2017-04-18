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
        $this->loadViewsFrom(__DIR__ . '/../views/', 'noty');

        $this->publishes([
            __DIR__ . '/../../config/laravel-noty.php' => config_path('laravel-noty.php')
        ], 'laravel-noty');
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../../config/laravel-noty.php', 'laravel-noty');

        $this->app->bind(NotySessionStore::class);

        $this->app->singleton('noty', function () {
            return $this->app->make(NotyNotifier::class);
        });
    }
}