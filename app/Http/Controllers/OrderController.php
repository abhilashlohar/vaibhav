<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\UserAddress;
use App\Order;
use App\OrderRow;

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

    public function saveCheckout(Request $request)
    {
        $user = auth()->user();

        $UserAddress = new UserAddress;
        $UserAddress->user_id = $user->id;
        $UserAddress->name = $request->bill_name;
        $UserAddress->mobile = $request->bill_mobile;
        $UserAddress->address = $request->bill_address;
        $UserAddress->pincode = $request->bill_pincode;
        $UserAddress->landmark = $request->bill_landmark;
        $UserAddress->state = $request->bill_state;
        $UserAddress->save();

        $same_as_billing = $request->same_as_billing;

        if (!$same_as_billing) {
            $UserAddress = new UserAddress;
            $UserAddress->user_id = $user->id;
            $UserAddress->name = $request->ship_name;
            $UserAddress->mobile = $request->ship_mobile;
            $UserAddress->address = $request->ship_address;
            $UserAddress->pincode = $request->ship_pincode;
            $UserAddress->landmark = $request->ship_landmark;
            $UserAddress->state = $request->ship_state;
            $UserAddress->save();
        }


        $cartItems = Cart::where('user_id',$user->id)->get();

        $totalAmount = 0;
        foreach ($cartItems as $cartItem) {
            $totalAmount += $cartItem->quantity*$cartItem->product->sale_price;
        }


        $Order = new Order;
        $Order->order_date = date('Y-m-d H:i:s');
        $Order->user_id = $user->id;
        $Order->order_no = $this->newOrderNumber();
        $Order->order_amount = $totalAmount;
        $Order->payment_mode = 'cod';
        $Order->payment_status = 'cod';
        
        $Order->bill_name = $request->bill_name;
        $Order->bill_mobile = $request->bill_mobile;
        $Order->bill_address = $request->bill_address;
        $Order->bill_pincode = $request->bill_pincode;
        $Order->bill_landmark = $request->bill_landmark;
        $Order->bill_state = $request->bill_state;

        if (!$same_as_billing) {
            $Order->ship_name = $request->ship_name;
            $Order->ship_mobile = $request->ship_mobile;
            $Order->ship_address = $request->ship_address;
            $Order->ship_pincode = $request->ship_pincode;
            $Order->ship_landmark = $request->ship_landmark;
            $Order->ship_state = $request->ship_state;
        } else {
            $Order->ship_name = $request->bill_name;
            $Order->ship_mobile = $request->bill_mobile;
            $Order->ship_address = $request->bill_address;
            $Order->ship_pincode = $request->bill_pincode;
            $Order->ship_landmark = $request->bill_landmark;
            $Order->ship_state = $request->bill_state;
        }
        $Order->save();



        foreach ($cartItems as $cartItem) {
            $OrderRow = new OrderRow;
            $OrderRow->order_id = $Order->id;
            $OrderRow->product_id = $cartItem->product_id;
            $OrderRow->quantity = $cartItem->quantity;
            $OrderRow->price = $cartItem->product->sale_price;
            $OrderRow->amount = $cartItem->quantity*$cartItem->product->sale_price;
            $OrderRow->save();
        }


        return redirect()->route('orders.thanks', $Order->id)
                        ->with('success','Order placed successfully');

        
    }

    public function newOrderNumber()
    {
        $order = Order::latest('order_no')->limit(1)->first();
        if ($order) return $order->order_no;
        else return 1001;
    }


    public function thanks(Request $request)
    {
        return view('orders.thanks');
    }
}
