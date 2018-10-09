<?php

namespace Willmav5000\PDF;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;


class ServiceProvider extends IlluminateServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('mpdf', function () {
            return new PDF();
        });
    }
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('mpdf');
    }
}
