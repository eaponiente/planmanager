<?php

namespace Edgar\PlanManager;

use Illuminate\Support\ServiceProvider;

class PlanManagerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Edgar\PlanManager\ManagerController');

        $this->loadViewsFrom(__DIR__.'/views', 'planmanager');

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }
}
