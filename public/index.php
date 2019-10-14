<?php

require_once(__DIR__ . '/../bootstrap/app.php');

use Elphis\Http\Foundation\Kernel;


Kernel::createServer()
    ->startServer();
