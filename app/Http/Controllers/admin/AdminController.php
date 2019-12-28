<?php

namespace App\Http\Controllers\admin;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Middleware\CheckAuth;
use App\Http\Middleware\UserRightsAuth;
use App\Mail\ForgottenPasswordAdmin;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(CheckAuth::class);
        //$this->middleware(UserRightsAuth::class);
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
        $admin = Admin::where('email', '=', $request->email)->first();
        if ($admin->id)
        {
            Mail::to($admin->email)->send(
                new EnquiryReplyFromAdmin(
                    $admin->name,
                    1234,
                    $admin->email
                )
            );
        }
        dd($admin);


        // return (new MailMessage)
        //     ->subject(Lang::get('Reset Password Notification'))
        //     ->line(Lang::get('You are receiving this email because we received a password reset request for your account.'))
        //     ->action(Lang::get('Reset Password'), url(config('app.url').route('password.reset', ['token' => $this->token, 'email' => $notifiable->getEmailForPasswordReset()], false)))
        //     ->line(Lang::get('This password reset link will expire in :count minutes.', ['count' => config('auth.passwords.'.config('auth.defaults.passwords').'.expire')]))
        //     ->line(Lang::get('If you did not request a password reset, no further action is required.'));
        // }

        $request->request->add(['image' => $fileName]);
        $admin->update($request->all());

        return redirect()->route('Admin.dashboard')->with('success','Password has updated successfully.');
    }
}
