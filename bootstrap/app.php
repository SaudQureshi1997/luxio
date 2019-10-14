<?php

require_once(__DIR__ . '/../vendor/autoload.php');

use Elphis\Utils\Container;

$dotenv = \Dotenv\Dotenv::create(getcwd());
$dotenv->load();

Container::preLoad([
    \Elphis\Providers\ConfigServiceProvider::class
]);
Container::load();
