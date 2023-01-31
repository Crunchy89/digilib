<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index()
    {

        $subpage = true;
        $menu = "about";
        return view("home.about", compact("subpage", "menu"));
    }
}