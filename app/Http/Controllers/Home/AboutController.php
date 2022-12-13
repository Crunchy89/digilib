<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index()
    {
        //
        $data = [
            "subpage" => true
        ];
        return view("home.about", $data);
    }
}