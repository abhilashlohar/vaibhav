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

        if ($admin_id) {
            $action = app('request')->route()->getAction();
            $controller = class_basename($action['controller']);
            //dd($controller);
            $admin = Admin::find($admin_id);
            $admin->load('userrights','userrights.module');
            //dd($admin);
            $allows = false;
            foreach ($admin->userrights as $userright) {
                //$userrightsArray[$userright->name][] = $userright->id;
                if($userright->name === $controller)
                {
                    $allows = true;
                }
            }
            if(!$allows)
            {
                abort(403);
            }
        }

        return $next($request);
    }
}
