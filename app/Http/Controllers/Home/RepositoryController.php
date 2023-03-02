<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Model\Repository;
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
        // $repository = Repository::latest()->limit(6)->get();
        return view("home.repository.repository", compact("subpage", "menu"));
    }

    public function detail(string $slug)
    {
        $subpage = true;
        $menu = "repository";
        $repository = Repository::whereSlug($slug)->first();
        return view("home.repository.detail", compact("subpage", "menu", "repository"));
    }

    public function getRepository(Request $request)
    {
        // $page = $request->search;
        $page = $request->get("page");
        if ($page < 1) {
            $page = 1;
        }
        $repo = Repository::select("judul", "cover", "abstrak", "slug")->latest()->skip($page * 6 - 6)->take(6)->get();
        $data = [];
        foreach ($repo as $temp) {
            $test = [];
            $test["judul"] = $temp->judul;
            $test["cover"] = asset($temp->cover);
            $test["abstrak"] = $temp->abstrak;
            $test["url"] = route("home.repository.detail", $temp->slug);
            $data[] = $test;
        }
        return Response::success($data);
    }
}