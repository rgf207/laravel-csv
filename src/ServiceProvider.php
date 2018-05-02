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
    public function boot ()
    {

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register ()
    {
        $this->app->bind('csv', function () {
            return new csv();
        });
    }
}
