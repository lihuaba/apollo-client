<?php

namespace ApolloClient;

use Illuminate\Support\ServiceProvider;

class ApploClientServiceProvider extends ServiceProvider
{
    /**
     * @var array
     */
    protected $commands = [
        Console\ApolloPullConfig::class,
    ];
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands($this->commands);
        $this->registerLaravelBindings();
    }


    /**
     * Register Laravel bindings.
     *
     * @return void
     */
    protected function registerLaravelBindings()
    {
        $this->app->singleton(ApploClientService::class, function ($app) {
            return new ApploClientService();
        });
    }

}
