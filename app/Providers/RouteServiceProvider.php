<?php

namespace App\Providers;

use Elphis\Http\Routing\Router;
use Elphis\Providers\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(Router::class, Router::class);
    }
}
