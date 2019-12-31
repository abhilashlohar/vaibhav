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
        $cart = [];
        $minutes = 60;
        $user = auth()->user();
        $existCookie = false;

        if($user)
        {
            $cartItems = Cart::where('user_id',$user->id)->get();

            if($request->hasCookie('vaibhav_cart'))
            {
                $cookieValues = json_decode($request->cookie('vaibhav_cart'));

                foreach($cookieValues  as $key => $cookieValue)
                {
                    if($cookieValue->product_id == $request->product_id)
                    {
                        $cookieValue->quantity += 1;
                        $existCookie = true;
                    }
                    $cart[]=['product_id'=>$cookieValue->product_id,'quantity'=>$cookieValue->quantity];
                }
                if(!$existCookie)
                {
                    $cart[]=['product_id'=>$request->product_id,'quantity'=>1];
                }
                \Cookie::queue(\Cookie::forget('vaibhav_cart'));

                // insert Query;
                // DB::table('carts')->insertOrIgnore($cart);
            }
            else
            {
                foreach($cartItems  as $cartItem)
                {
                    if($cartItem->product_id == $request->product_id)
                    {
                        $cartItem->quantity += 1;
                        $existCookie = true;
                        /// Update data
                        Cart::where('id', $cartItem->id)
                            ->update(['quantity' =>  $cartItem->quantity]);
                    }

                }
                if(!$existCookie)
                {
                    /// Insert data
                    $CartTable = new Cart;
                    $CartTable->product_id = $request->product_id;
                    $CartTable->user_id = $user->id;
                    $CartTable->quantity = 1;
                    $CartTable->save();
                }
            }



        }
        else
        {
            if($request->hasCookie('vaibhav_cart'))
            {
                $cookieValues = json_decode($request->cookie('vaibhav_cart'));

                foreach($cookieValues  as $key => $cookieValue)
                {
                    if($cookieValue->product_id == $request->product_id)
                    {
                        $cookieValue->quantity += 1;
                        $existCookie = true;
                    }
                    $cart[]=['product_id'=>$cookieValue->product_id,'quantity'=>$cookieValue->quantity];
                }
                if(!$existCookie)
                {
                    $cart[]=['product_id'=>$request->product_id,'quantity'=>1];
                }
            }
            else
            {
                $cart[]=['product_id'=>$request->product_id,'quantity'=>1];
            }
            $array_json=json_encode($cart);
            return response('Set Cookie')->cookie(cookie('vaibhav_cart', $array_json, $minutes));
        }
    }
}
