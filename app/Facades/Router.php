<?php

namespace App\Facades;

use Elphis\Support\Facades\Facade;
use Elphis\Http\Routing\Router as CoreRouter;

class Router extends Facade
{
    public static function getFacadeAccessor()
    {
        return CoreRouter::class;
    }
}
