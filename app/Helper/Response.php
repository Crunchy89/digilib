<?php

namespace App\Helper;

class Response
{
    public static function success($data, int $code = 200)
    {
        return response()->json([
            "code" => $code,
            "data" => $data
        ], $code);
    }
    public static function error($data, int $code = 500)
    {
        return response()->json([
            "code" => $code,
            "data" => $data
        ], $code);
    }

    public static function validation($data, int $code = 422)
    {
        return response()->json([
            "code" => $code,
            "data" => $data
        ], $code);
    }
}