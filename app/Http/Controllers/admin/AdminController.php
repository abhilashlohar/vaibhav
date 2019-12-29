<?php

namespace App\Http\Controllers\admin;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Middleware\CheckAuth;
use App\Http\Middleware\UserRightsAuth;
use Illuminate\Support\Facades\Mail;
use App\Mail\ForgottenPasswordAdmin;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(CheckAuth::class);
        $this->middleware(UserRightsAuth::class);
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

        if ($email && $password)
        {
            $admin = Admin::where('email', '=', $email)->first();

            if ($admin)
            {
                if(Hash::check($password, $admin->password))
                {
                    if (isset($admin->id)) {
                        $request->session()->put('admin_id', $admin->id);
                        $request->session()->put('admin_name', $admin->name);
                        $admin->load('userrights','userrights.module');
                        $userrightPages = [];
                        foreach ($admin->userrights as $userright) {
                            $userrightPages[] = $userright->name;
                        }
                        $request->session()->put('userrightPages', $userrightPages);

                        return redirect()->route('Admin.dashboard');
                    }
                }
            }
        }


        return redirect()->route('showAdminLoginForm')->withFail('Invalid credentials.');
        // return view('admin.login.login');
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
        $request->validate(Admin::rules(), Admin::messages());
        $admin = Admin::create($request->all());
        return redirect()->route('users.index')->route('users.index')->with('success','User has created successfully.');;
    }

    public function edit($id)
    {
        $admin = Admin::find($id);

        return view('admin.login.edit',compact('admin'));
    }
    public function update(Request $request, $id)
    {
        $request->validate(Admin::rules($id), Admin::messages());

        $admin = Admin::find($id);
        $admin->update($request->all());

        return redirect()->route('users.index')->with('success','User record updated successfully.');
    }

    public function dashboard(Request $request)
    {
        return view('admin.login.dashboard');
    }

    public function changePassword()
    {
        return view('admin.login.change_password');
    }
    public function updatePassword(Request $request)
    {
        $admin_id = $request->session()->get('admin_id');
        $validatedData = $request->validate([
            'password' => 'required',
        ]);
        $admin = Admin::find($admin_id);
        $admin->update($request->all());

        return redirect()->route('Admin.dashboard')->with('success','Password has updated successfully.');
    }
    public function forgottenPassword(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required',
        ]);
        // $six_digit_otp_number = mt_rand(100000, 999999);
        $token = (string) Str::uuid();
        $admin = Admin::where('email', '=', $request->email)->first();
        if ($admin->id)
        {
            Mail::to($admin->email)->send(
                new ForgottenPasswordAdmin(
                    $admin->name,
                    $token,
                    $admin->email
                )
            );
        }

        $request->request->add(['otp' => $token]);
        $admin->update($request->all());

        return redirect()->route('showAdminLoginForm')->with('success','One time reset password link send to your mail, please check and reset password.');
    }
    public function resetPassword(Request $request)
    {
        $validatedData = $request->validate([
            'otp' => 'required',
            'email' => 'required',
        ]);
        $admin = Admin::where('email', '=', $request->email)->where('otp', '=', $request->otp)->first();
        $request->request->add(['otp' => '']);
        $admin->update($request->all());
        if (isset($admin->id)) {
            $request->session()->put('admin_id', $admin->id);
            $request->session()->put('admin_name', $admin->name);
            $admin->load('userrights','userrights.module');
            $userrightPages = [];
            foreach ($admin->userrights as $userright) {
                $userrightPages[] = $userright->name;
            }
            $request->session()->put('userrightPages', $userrightPages);
            return redirect()->route('admin.changepassword')->with('success','One time password link send to your mail, please check and reset password.');
        }

       return redirect()->route('showAdminLoginForm')->with('error','Password is not reset, please try again later.');
    }
}
