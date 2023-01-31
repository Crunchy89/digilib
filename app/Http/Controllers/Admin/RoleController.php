<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Response;
use App\Http\Controllers\Controller;
use App\Model\Role;
use Exception;
use Illuminate\Http\Request;
use DataTables;

class RoleController extends Controller
{
    public function index()
    {
        $active = "role";
        $title = "role";
        $url = route("admin.role.datatable");
        $aksi = route("admin.role.aksi");
        $th = ["No", "Role", "Aksi"];
        return view("admin.role", compact("active", "title", "url", "aksi", "th"));
    }

    public function getById(Request $request, $id)
    {
        try {
            $role = Role::find($id);
            return Response::success($role, 200);
        } catch (Exception $e) {
            return Response::error("data tidak ditemukan", 404);
        }
    }

    public function datatable()
    {
        return DataTables::of(Role::all())
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $url = route("admin.role.id", $row->id);
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
            if ($request->role == "") {
                return Response::error("role tidak boleh kosong");
            }
            $data = $request->except("id", "aksi");
            Role::create($data);
            return Response::success("data berhasil disimpan", 200);
        } catch (Exception $e) {
            return Response::success($e, 500);
        }
    }

    private function update(Request $request)
    {
        try {
            if ($request->role == "") {
                return Response::error("role tidak boleh kosong");
            }
            $data = $request->except("id", "aksi");
            Role::find($request->id)->update($data);
            return Response::success("data berhasil diubah", 200);
        } catch (Exception $e) {
            return Response::success($e, 500);
        }
    }

    private function delete(Request $request)
    {
        try {
            Role::find($request->id)->delete();
            return Response::success("data berhasil dihapus", 200);
        } catch (Exception $e) {
            return Response::success($e, 500);
        }
    }
}