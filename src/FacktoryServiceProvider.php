<?php namespace Vehikl\Facktory;

use Illuminate\Support\ServiceProvider;

class FacktoryServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['adamwathan.facktory'] = $this->app->share(function($app)
        {
            return new Facktory;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('facktory');
    }

}