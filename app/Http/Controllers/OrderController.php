<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;

class OrderController extends Controller
{
    public function checkout()
    {
        $user = auth()->user();

        $cartItems = Cart::where('user_id',$user->id)->get();

        $totalAmount = 0;
        foreach ($cartItems as $cartItem) {
            $totalAmount += $cartItem->quantity*$cartItem->product->sale_price;
        }

        $totalItems = count($cartItems);
    
        
        return view('orders.checkout',compact('totalAmount', 'totalItems'));
    }
}
