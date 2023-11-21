<?php

namespace Modules\Persona\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind(\Modules\Persona\Repositories\UserRepository::class, \Modules\Persona\Repositories\UserRepositoryEloquent::class);
        //:end-bindings:
    }
}
