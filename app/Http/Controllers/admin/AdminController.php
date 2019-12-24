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

    public function showAdminLoginForm(Request $request)
    {
        $admin_id = $request->session()->get('admin_id');
        if ($admin_id) return redirect()->route('Admin.dashboard');

        return view('admin.login.login');
    }

    public function AdminLogin(Request $request)
    {
        $email      = $request->all()['email'];
        $password   = $request->all()['password'];

        $admin = Admin::where('email', '=', $email)->first();

        if(Hash::check($password, $admin->password))
        {
            if (isset($admin->id)) {
                $request->session()->put('admin_id', $admin->id);
                $request->session()->put('admin_name', $admin->name);

                return redirect()->route('Admin.dashboard');
            }
        }

        return view('admin.login.login');
    }

    public function AdminLogout(Request $request)
    {
        $request->session()->forget(['admin_id', 'admin_name']);

        $request->session()->flush();

        return redirect()->route('showAdminLoginForm');
    }

    public function index()
    {
        $admins = Admin::paginate(5);
        return view('admin.login.index',compact('admins'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.login.create');
    }

    public function store(Request $request)
    {
        $admin = Admin::create($request->all());
        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        $admin = Admin::find($id);

        return view('admin.login.edit',compact('admin'));
    }
    public function update(Request $request, $id)
    {
        $admin = Admin::find($id);
        $admin->update($request->all());

        return redirect()->route('users.index');
    }

    public function dashboard(Request $request)
    {
        return view('admin.login.dashboard');
    }
}
