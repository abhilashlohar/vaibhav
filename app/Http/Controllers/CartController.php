<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Cookie;
class CartController extends BaseController
{
    public function __construct()
    {
        // $this->middleware('auth');
        parent::__construct();
    }

    public function list()
    {
        $user = auth()->user();

        if($user)
        {
            $cartItems = Cart::where('user_id',$user->id)->get();
        }
        else
        {
            $cartItems ="";
        }


        $page_title = 'Vaibhav - A Unit of 28 South Ventures';
        $body_class = 'cart';
        return view('cart.list',compact('cartItems','page_title','body_class'));
    }


}
