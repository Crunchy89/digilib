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
        $data = [
            "subpage" => true
        ];
        return view("home.repository", $data);
    }

    public function getRepository()
    {
        $repo = Repository::all();
        return Response::success($repo);
    }
}