<?php

namespace App\Http\Middleware;

use App\Admin;
use App\UserRight;
use Closure;
use Illuminate\Support\Facades\Route;
class UserRightsAuth
{
    public function handle($request, Closure $next)
    {
        $admin_id = $request->session()->get('admin_id');

        if (!app()->runningInConsole() && $admin_id) {
            $admin = Admin::find($admin_id);
            $admin->load('userrights');

            foreach ($admin->userrights as $userright) {
                $userrightsArray[] = $userright->id;
            }
            dd($userrightsArray);

            // foreach ($admin->permissions as $permission) {
            //     dd(Gate::define($permission->title, 'true'));
            //     Gate::define($permission->title, 'true');
            // }
            // foreach ($permissionsArray as $title => $admins) {
            //     // dd( Gate::define($title, function (\App\Admin $admin) use ($admins) {
            //     //     return count(array_intersect($admin->pluck('id')->toArray(), $admins)) > 0;
            //     // }));
            //     // $aa = Admin::pluck('id')->toArray();
            //     // dd(count(array_intersect($aa, $admins)) > 0);
            //     // dd($aa);
            //     Gate::define($title, function (\App\Admin $admin) use ($admins) {
            //         //dd($admin->pluck('id'));
            //         return count(array_intersect($admin->pluck('id')->toArray(), $admins)) > 0;
            //     });
            // }
        }

        return $next($request);
    }
}
