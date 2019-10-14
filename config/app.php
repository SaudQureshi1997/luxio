<?php

return [

    'name' => env('APP_NAME', 'elphis'),
    'host' => env('HOST'),
    'port' => env('PORT', '8001'),
    'host_name' => env('HOST_NAME', 'localhost'),
    'env' => env('APP_ENV', 'dev'),

    'providers' => [
        \Elphis\Providers\SwooleResponseServiceProvider::class,
        \Elphis\Providers\HotReloadServiceProvider::class,
        \Elphis\Providers\HttpMessageServiceProvider::class,
        \App\Providers\RouteServiceProvider::class,
        \Elphis\Providers\ServerServiceProvider::class,
        \Elphis\Providers\ValidationServiceProvider::class,
        \Elphis\Providers\LoggerServiceProvider::class
    ],

    'aliases' => [
        'Router' => \App\Facades\Router::class,
        'Validator' => \Elphis\Support\Facades\Validator::class,
        'Request' => \Elphis\Support\Facades\Request::class,
        'Response' => \Elphis\Support\Facades\Response::class,
        'Config' => \Elphis\Support\Facades\Config::class,
        'Logger' => \Elphis\Support\Facades\Logger::class
    ]
];
