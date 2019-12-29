<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function list()
    {
        $user = auth()->user();

        $cartItems = Cart::where('user_id',$user->id)->get();
        
        return view('cart.list',compact('cartItems'));
    }
}
