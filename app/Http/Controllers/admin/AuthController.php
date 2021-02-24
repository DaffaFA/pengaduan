<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Petugas;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('admin.login');
    }

    public function registerView()
    {
        return view('admin.register');
    }

    public function register(Request $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        
        Petugas::create($data);

        return redirect()->route('admin.dashboard');
    }
}
