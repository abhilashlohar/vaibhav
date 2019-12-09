<?php

namespace App\Http\Controllers\admin;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Middleware\CheckAuth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(CheckAuth::class);
    }

    public function showAdminLoginForm()
    {
        return view('admin.login.login');
    }

    public function AdminLogin(Request $request)
    {
        $email      = $request->all()['email'];
        $password   = $request->all()['password'];
        
        $admin = Admin::where([
            ['email', '=', $email],
            ['password', '=', md5($password)],
        ])->first();

        if (isset($admin->id)) {
            $request->session()->put('admin_id', $admin->id);
            $request->session()->put('admin_name', $admin->name);

            return redirect()->route('Admin.dashboard');
        }

        return view('admin.login.login');
    }

    public function dashboard(Request $request)
    {

        return view('admin.login.dashboard');
    }
}
