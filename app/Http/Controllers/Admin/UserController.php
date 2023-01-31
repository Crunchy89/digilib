<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Response;
use App\Http\Controllers\Controller;
use App\Model\Role;
use App\Model\User;
use Exception;
use Illuminate\Http\Request;
use DataTables;

class UserController extends Controller
{
    //
    public function index()
    {
        $active = "user";
        $title = "user";
        $url = route("admin.user.datatable");
        $aksi = route("admin.user.aksi");
        $th = ["No", "Username", "Role", "Aksi"];
        $role = Role::all();
        return view("admin.user", compact("active", "title", "url", "aksi", "th", "role"));
    }

    public function getById(Request $request, $id)
    {
        try {
            $role = User::find($id);
            return Response::success($role, 200);
        } catch (Exception $e) {
            return Response::error("data tidak ditemukan", 404);
        }
    }

    public function datatable()
    {
        $user = User::joinRole()->get();
        return DataTables::of($user)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $url = route("admin.user.id", $row->id);
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
            if ($request->username == "") {
                return Response::error("username tidak boleh kosong");
            }
            if ($request->password == "") {
                return Response::error("password tidak boleh kosong");
            }
            if ($request->role_id == "") {
                return Response::error("role tidak boleh kosong");
            }
            $data["password"] = password_hash($request->password, PASSWORD_DEFAULT);
            User::create($data);
            return Response::success("data berhasil disimpan", 200);
        } catch (Exception $e) {
            return Response::error($e);
        }
    }

    private function update(Request $request)
    {
        try {
            $data = [
                "role_id" => $request->role_id,
            ];
            if ($request->role_id == "") {
                return Response::error("role tidak boleh kosong");
            }
            if ($request->password != "") {
                $data["password"] = password_hash($request->password, PASSWORD_DEFAULT);
            }
            User::find($request->id)->update($data);
            return Response::success("data berhasil diubah", 200);
        } catch (Exception $e) {
            return Response::error($e);
        }
    }

    private function delete(Request $request)
    {
        try {
            User::find($request->id)->delete();
            return Response::success("data berhasil dihapus", 200);
        } catch (Exception $e) {
            return Response::error($e);
        }
    }
}