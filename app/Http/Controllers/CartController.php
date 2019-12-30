<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Cookie;
class CartController extends Controller
{
    public function list()
    {
        $user = auth()->user();

        $cartItems = Cart::where('user_id',$user->id)->get();

        return view('cart.list',compact('cartItems'));
    }

    public function addTocart(Request $request)
    {

        // \Cookie::queue(\Cookie::forget('cart'));  // Delete Cookie

        // $request->hasCookie('key');

        /// Save Cookie

        // $cart=['name'=>'Imran','email'=>'xyz*emphasized text@gmail.com'];
        // $array_json=json_encode($cart);
        // $minutes = 60;
        // $cookie = cookie('cart', $array_json, $minutes);
        // return response('Set Cookie')->cookie($cookie);


         $value = $request->cookie('cart');
        $data =  json_decode($value);
        echo $data->name;
        echo $data->email;
    }
}
