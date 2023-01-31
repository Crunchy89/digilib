<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Response;
use App\Http\Controllers\Controller;
use App\Model\Pengarang;
use Exception;
use Illuminate\Http\Request;
use DataTables;

class PengarangController extends Controller
{
    //
    public function index()
    {
        $active = "pengarang";
        $title = "pengarang";
        $url = route("admin.pengarang.datatable");
        $aksi = route("admin.pengarang.aksi");
        $th = ["No", "Nama Pengarang", "Tahun Lahir", "Aksi"];
        return view("admin.pengarang", compact("active", "title", "url", "aksi", "th"));
    }

    public function getById(Request $request, $id)
    {
        try {
            $Pengarang = Pengarang::find($id);
            return Response::success($Pengarang, 200);
        } catch (Exception $e) {
            return Response::error("data tidak ditemukan", 404);
        }
    }

    public function datatable()
    {
        $pengarang = Pengarang::all();
        return DataTables::of($pengarang)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $url = route("admin.pengarang.id", $row->id);
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
            Pengarang::create($data);
            return Response::success("data berhasil disimpan", 200);
        } catch (Exception $e) {
            return Response::error($e);
        }
    }

    private function update(Request $request)
    {
        try {
            $data = $request->except("id", "aksi");
            Pengarang::find($request->id)->update($data);
            return Response::success("data berhasil diubah", 200);
        } catch (Exception $e) {
            return Response::error($e);
        }
    }

    private function delete(Request $request)
    {
        try {
            Pengarang::find($request->id)->delete();
            return Response::success("data berhasil dihapus", 200);
        } catch (Exception $e) {
            return Response::error($e);
        }
    }
}