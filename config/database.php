<?php

return [

    'default' => 'mysql',

    'connections' => [

        'postgres' => [
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', 5432),
            'database' => env('DB_DATABASE', 'test'),
            'user' => env('DB_USER', 'test'),
            'password' => env('DB_PASSWORD'),
            'timeout' => 2
        ],

        'mysql' => [
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', 3306),
            'database' => env('DB_DATABASE', 'test'),
            'user' => env('DB_USER', 'test'),
            'password' => env('DB_PASSWORD'),
            'charset' => 'utf8',
            'timeout' => 2,
        ]

    ]
];
