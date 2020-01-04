<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
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
        $cartItems = [];
        $cookieItems = [];
        $cookieCartItems = [];
        if($user)
        {
            $cartItems = Cart::where('user_id',$user->id)->get();
        }
        else
        {
            $cookieItems = json_decode(request()->cookie('vaibhav_cart'));
            foreach ($cookieItems as $cookieItem)
            {
                //echo $cookieItem->product_id;
                $cookie_products = Product::with(['product_image_primary'])->where([
                    ['products.is_published', '=', 1],
                    ['products.id', '=', $cookieItem->product_id],
                    ['products.deleted', '=', 0]
                ])->first();

                $cookieCartItems[] = ['quantity'=>$cookieItem->quantity,'product'=>$cookie_products];
            }
        }

        $page_title = 'Vaibhav - A Unit of 28 South Ventures';
        $body_class = 'cart';
        return view('cart.list',compact('cartItems','cookieCartItems','page_title','body_class'));
    }


}
