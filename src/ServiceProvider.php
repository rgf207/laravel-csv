<?php

namespace onethirtyone\csv;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/csv.php' => config_path('csv.php'),
        ]);
        $this->mergeConfigFrom(__DIR__ . '/config/csv.php', 'csv');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('csv', function () {
            return new csv();
        });
    }
}
