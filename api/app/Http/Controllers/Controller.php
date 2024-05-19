<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function jsonResponse($data, $code = 200)
    {
        return response()->json(
                   $data,
                   $code,
                   ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                   JSON_UNESCAPED_UNICODE
               );
    }
}
