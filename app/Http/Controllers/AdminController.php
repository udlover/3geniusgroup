<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function login(Request $req)
    {
        $req->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        $admin = Admin::where('username', $req->username)->first();
        if (!$admin || !Hash::check($req->password, $admin->password)) {
            return redirect('/')->with('error', 'invalid username or password');
        } else {
            $req->Session()->put('username', $req->username);
            return redirect('dashboard');
        }
    }

    public function logout()
    {
        Session::forget('username');
        return redirect('/');
    }
}
