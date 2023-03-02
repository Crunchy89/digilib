<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Response;
use App\Http\Controllers\Controller;
use App\Model\Role;
use App\User;
use Exception;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    //
    public function index()
    {
        (string)$active = "user";
        (string)$title = "user";
        (string)$url = route("admin.user.datatable");
        (string)$aksi = route("admin.user.aksi");
        (array)$th = ["No", "Username", "Role", "Aksi"];
        $role = Role::all();
        return view("admin.user", compact("active", "title", "url", "aksi", "th", "role"));
    }

    public function getById(string $uuid)
    {
        try {
            $role = User::whereUuid($uuid)->first();
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
                $url = route("admin.user.id", $row->uuid);
                $btn = "<button data-url='$url' class='m-1 btn btn-warning btn-sm edit'><i class='fas fa-pen'></i></button> ";
                $btn .= "<button data-id='$row->uuid' class='m-1 btn btn-danger btn-sm hapus'><i class='fas fa-trash'></i></button>";
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
        $request->validate([
            'username' => ['required'],
            'password' => ['required'],
            'role_uuid' => ['required'],
        ]);
        try {
            $data = $request->except("id", "aksi");
            User::create($data);
            return Response::success("data berhasil disimpan", 200);
        } catch (Exception $e) {
            return Response::error($e);
        }
    }

    private function update(Request $request)
    {
        $request->validate([
            "role_uuid" => ["required"]
        ]);
        try {
            $data = [
                "role_uuid" => $request->role_uuid,
            ];
            if ($request->password != "") {
                $data["password"] = $request->password;
            }
            User::whereUuid($request->id)->update($data);
            return Response::success("data berhasil diubah", 200);
        } catch (Exception $e) {
            return Response::error($e);
        }
    }

    private function delete(Request $request)
    {
        $request->validate([
            "id" => ["required"]
        ]);
        try {
            User::whereUuid($request->id)->delete();
            return Response::success("data berhasil dihapus", 200);
        } catch (Exception $e) {
            return Response::error($e);
        }
    }
}