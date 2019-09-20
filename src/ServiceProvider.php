<?php

namespace Gameloch\Office;


use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(Office::class, function (Container $app) {
            return new Office($app);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $source = realpath(__DIR__ . '/../config/Office.php');
        $this->publishes([$source => config_path('Office.php')]);
        $this->mergeConfigFrom($source, 'Office');
    }
}