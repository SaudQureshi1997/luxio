<?php

namespace App\Controllers\Http;

use Request;
use Response;
use Validator;

class HelloWorldController
{
    public function index(Request $request, Response $response)
    {
        $data = Validator::validate($request->all(), [
            'another' => 'required',
            'name' => 'required|bool',
            'ip' => 'required|numeric|digits:10'
        ]);

        $response->json($data, 200);
    }

    public function store(Request $request, Response $response)
    {
        $data = $request->all();
        return $response->json($data, 200);
    }
}
