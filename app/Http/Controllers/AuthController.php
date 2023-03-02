<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        Auth::attempt($request->only("username", "password"));
        return redirect()->back();
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->back();
    }
}