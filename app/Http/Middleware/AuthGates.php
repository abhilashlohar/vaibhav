<?php

namespace App\Http\Middleware;

use App\Admin;
use Closure;
use Illuminate\Support\Facades\Gate;

class AuthGates
{
    public function handle($request, Closure $next)
    {
        $admin = \CheckAuth::admin();

        if (!app()->runningInConsole() && $admin) {
            $admins = Admin::with('permissions')->get();

            foreach ($admins as $admin) {
                foreach ($admin->permissions as $permissions) {
                    $permissionsArray[$permissions->title][] = $admin->id;
                }
            }

            foreach ($permissionsArray as $title => $admins) {
                Gate::define($title, function (\App\Admin $admin) use ($admins) {
                    return count(array_intersect($admin->pluck('id')->toArray(), $admins)) > 0;
                });
            }
        }

        return $next($request);
    }
}
