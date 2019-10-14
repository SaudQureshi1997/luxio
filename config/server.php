<?php

return [
    // number of server workers to use multiple cores
    'worker_num' => 4,

    // set document root
    'document_root' => public_path(),

    // enable static handler to serve static files
    'enable_static_handler' => true,

    // set static resources path 
    // defaults to all directory present in document root, must start with a slash
    "static_handler_locations" => ['/*'],

    // set temporary storage path for uploaded files
    'upload_tmp_dir' => storage_path('tmp'),

    // allow swoole to parse cookie
    'http_parse_cookie' => true,


];
