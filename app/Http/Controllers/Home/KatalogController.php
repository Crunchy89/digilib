<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    //
    public function index()
    {
        //
        $subpage = true;
        $menu = "katalog";
        return view("home.katalog", compact("subpage", "menu"));
    }
}
