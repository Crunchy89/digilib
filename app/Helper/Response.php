<?php

namespace App\Helper;

class Response
{
    public static function success($data, $code = 200)
    {
        return response()->json([
            "code" => $code,
            "data" => $data
        ], $code);
    }
    public static function error($data, $code = 500)
    {
        return response()->json([
            "code" => $code,
            "data" => $data
        ], $code);
    }

    public static function validation($data, $code = 422)
    {
        return response()->json([
            "code" => $code,
            "data" => $data
        ], $code);
    }
}