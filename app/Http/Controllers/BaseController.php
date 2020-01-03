<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Cart;
use View;
use Auth;
use App\Repositories\UserRepository;

class BaseController extends Controller
{
    protected $user;
    protected $users;
    protected $data = [];
    public function callAction($method, $parameters)
    {
        $this->users = app('auth')->user(); // this works

        return parent::callAction($method, $parameters);
    }
    public function __construct()
    {
        $headerCategories = Category::with('subCategoryFirst')
        ->where([
            ['deleted', '=', 0]
        ])
        ->orderBy('sequence', 'asc')
        ->get();
        // $this->middleware(function ($request, $next) {
        //     $this->data['user'] = Auth::user();
        //     return $next($request);
        // });

        // $this->middleware(function ($request, $next) {
        // $this->user= Auth::user();

            // $cartItems = Cart::where('user_id',$this->user->id);
            // $totalItemCart = 0 ;
            // foreach($cartItems as $cartItem)
            // {
            //     $totalItemCart += $cartItem->quantity;
            // }
        //    return $next($request);
        // });
        // $user = auth()->user();
        // dd($this->user);
        View::share(['headerCategories' => $headerCategories]);
        // View::share(['headerCategories' => $headerCategories, 'totalItemCart' => $totalItemCart]);
    }


}
