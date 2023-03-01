<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Files;
use App\Helper\Response;
use App\Http\Controllers\Controller;
use App\Model\Repository;
use Exception;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class RepositoryController extends Controller
{
    public function index()
    {
        $active = "repository";
        $title = "repository";
        $url = route("admin.repository.datatable");
        $aksi = route("admin.repository.aksi");
        $th = ["No", "NIM", "Judul", "Abstrak", "Cover", "File", "File Demo", "Aksi"];
        return view("admin.repository", compact("active", "title", "url", "aksi", "th"));
    }

    public function getById(string $uuid)
    {
        try {
            $role = Repository::whereUuid($uuid)->first();
            return Response::success($role, 200);
        } catch (Exception $e) {
            return Response::error("data tidak ditemukan", 404);
        }
    }

    public function datatable()
    {
        return DataTables::of(Repository::all())
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $url = route("admin.repository.id", $row->uuid);
                $btn = "<button data-url='$url' class='m-1 btn btn-warning btn-sm edit'><i class='fas fa-pen'></i></button> ";
                // $btn .= "<button data-id='$row->uuid' class='m-1 btn btn-danger btn-sm hapus'><i class='fas fa-trash'></i></button>";
                return $btn;
            })
            ->addColumn("abstrak", function ($row) {
                $data = substr($row->abstrak, 0, 100);
                $data .= "...";
                return $data;
            })
            ->addColumn("cover", function ($row) {
                $src = asset($row->cover);
                $cover = "<a href='$src' target='_blank'>view file</a>";
                return $cover;
            })
            ->addColumn("file", function ($row) {
                $src = asset($row->file);
                $cover = "<a href='$src' target='_blank'>view file</a>";
                return $cover;
            })
            ->addColumn("file_demo", function ($row) {
                $src = asset($row->file_demo);
                $cover = "<a href='$src' target='_blank'>view file</a>";
                return $cover;
            })
            ->rawColumns(
                ['action', "abstrak", 'cover', 'file', 'file_demo']
            )->make(true);
    }

    public function aksi(Request $request)
    {
        $aksi = $request->aksi;
        if ($aksi == "tambah") {
            return $this->tambah($request);
        } else if ($aksi == "edit") {
            return $this->update($request);
        } else if ($aksi == "hapus") {
            return $this->delete($request);
        } else {
            return Response::error("aksi tidak ditemukan", 422);
        }
    }

    private function tambah(Request $request)
    {
        $request->validate([
            "judul" => ["required"],
            "abstrak" => ["required"],
            "cover" => ["required"],
            "file" => ["required"],
            "file_demo" => ["required"]
        ]);
        try {
            $data = [
                "nim" => $request->nim,
                "judul" => $request->judul,
                "abstrak" => $request->abstrak,
                "cover" => Files::move($request->file("cover"), "assets/images/cover"),
                "file" => Files::move($request->file("file"), "assets/images/file"),
                "file_demo" => Files::move($request->file("file_demo"), "assets/images/file_demo"),
            ];
            Repository::create($data);
            return Response::success("data berhasil disimpan", 200);
        } catch (Exception $e) {
            return Response::success($e, 500);
        }
    }

    private function update(Request $request)
    {
        $request->validate([
            "judul" => ["required"],
            "abstrak" => ["required"],
        ]);
        try {
            $data["judul"] = $request->judul;
            $data["abstrak"] = $request->abstrak;
            $singleData = Repository::select("cover", "file", "file_demo")->whereUuid($request->id)->first();
            if ($request->hasfile("cover")) {
                $data["cover"] = Files::move($request->file("cover"), "assets/images/cover");
                Files::delete($singleData->cover);
            }
            if ($request->hasfile("file")) {
                $data["file"] = Files::move($request->file("file"), "assets/images/file");
                Files::delete($singleData->file);
            }
            if ($request->hasfile("file_demo")) {
                $data["file_demo"] = Files::move($request->file("file_demo"), "assets/images/file_demo");
                Files::delete($singleData->file_demo);
            }
            Repository::whereUuid($request->id)->update($data);
            return Response::success("data berhasil diubah", 200);
        } catch (Exception $e) {
            return Response::success($e, 500);
        }
    }

    private function delete(Request $request)
    {
        $request->validate([
            "id" => ["required"]
        ]);
        $singleData = Repository::select("cover", "file", "file_demo")->whereUuid($request->id)->first();
        Files::delete($singleData->cover);
        Files::delete($singleData->file);
        Files::delete($singleData->file_demo);
        try {
            Repository::whereUuid($request->id)->delete();
            return Response::success("data berhasil dihapus", 200);
        } catch (Exception $e) {
            return Response::success($e, 500);
        }
    }
    //
}
