<?php

namespace App\Http\Middleware;

use App\Admin;
use App\Permission;
use Closure;
use Illuminate\Support\Facades\Gate;
use App\Http\Middleware\CheckAuth;
class AuthGates
{
    public function handle($request, Closure $next)
    {
        $admin_id = $request->session()->get('admin_id');

        if (!app()->runningInConsole() && $admin_id) {
            $admin = Admin::find($admin_id);
            $permissions = Permission::all();
            $admin->load('permissions');

            // foreach ($admin->permissions as $permissions) {
            //     $permissionsArray[$permissions->title][] = $admin->id;
            // }
            // dd($permissionsArray);

            foreach ($admin->permissions as $permission) {
                // dd($permission->title);
                Gate::define($permission->title, 'true');
            }
        }

        return $next($request);
    }
}
