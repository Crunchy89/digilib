<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function index()
    {
        $subpage = true;
        $menu = "login";
        return view("home.about", compact("subpage", "menu"));
    }
}
