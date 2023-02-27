<?php

namespace App\Helper;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Ramsey\Uuid\Uuid;

class Files
{
    public static function move($file, string $path)
    {
        try {
            $filename = Uuid::uuid4()->toString();
            $file->move($path, $filename);
            return $path . "/" . $filename;
        } catch (Exception $e) {
            dd($e);
            return "";
        }
    }
    public static function delete(string $name)
    {
        try {
            if (File::exists(public_path($name))) {
                File::delete(public_path($name));
            }
            return 1;
        } catch (Exception $e) {
            dd($e);
            return 0;
        }
    }
}