<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Repository;
use App\Helper\Response;
use Illuminate\Http\Request;

class RepositoryController extends Controller
{
    //
    public function index()
    {
        //
        $subpage = true;
        $menu = "repository";
        $repository = Repository::latest()->limit(6)->get();
        return view("home.repository", compact("subpage", "menu", "repository"));
    }

    public function getRepository()
    {
        $repo = Repository::all();
        return Response::success($repo);
    }
}
