<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Response;
use App\Http\Controllers\Controller;
use App\Model\Rak;
use Exception;
use Illuminate\Http\Request;
use DataTables;

class RakController extends Controller
{
    //
    public function index()
    {
        $active = "rak";
        $title = "rak";
        $url = route("admin.rak.datatable");
        $aksi = route("admin.rak.aksi");
        $th = ["No", "Kode", "Nama", "Aksi"];
        return view("admin.rak", compact("active", "title", "url", "aksi", "th"));
    }

    public function getById(Request $request, $id)
    {
        try {
            $Rak = Rak::find($id);
            return Response::success($Rak, 200);
        } catch (Exception $e) {
            return Response::error("data tidak ditemukan", 404);
        }
    }

    public function datatable()
    {
        $rak = Rak::all();
        return DataTables::of($rak)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $url = route("admin.rak.id", $row->id);
                $btn = "<button data-url='$url' class='m-1 btn btn-warning btn-sm edit'><i class='fas fa-pen'></i></button> ";
                $btn .= "<button data-id='$row->id' class='m-1 btn btn-danger btn-sm hapus'><i class='fas fa-trash'></i></button>";
                return $btn;
            })
            ->rawColumns(
                ['action']
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
        try {
            $data = $request->except("id", "aksi");
            Rak::create($data);
            return Response::success("data berhasil disimpan", 200);
        } catch (Exception $e) {
            return Response::error($e);
        }
    }

    private function update(Request $request)
    {
        try {
            $data = $request->except("id", "aksi");
            Rak::find($request->id)->update($data);
            return Response::success("data berhasil diubah", 200);
        } catch (Exception $e) {
            return Response::error($e);
        }
    }

    private function delete(Request $request)
    {
        try {
            Rak::find($request->id)->delete();
            return Response::success("data berhasil dihapus", 200);
        } catch (Exception $e) {
            return Response::error($e);
        }
    }
}