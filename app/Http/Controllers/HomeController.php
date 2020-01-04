<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use App\Product;
use App\Enquiry;
use App\Cart;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class HomeController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('home','mail','cartItem');
        parent::__construct();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $page_title = 'Vaibhav - A Unit of 28 South Ventures';
        $body_class = 'home';

        return view('home', compact('page_title','body_class'));
    }

    public function mail()
    {
       $name = 'Krunal';
       Mail::to('abhilashlohar01@gmail.com')->send(new SendMailable($name));

       return 'Email was sent';
    }

    public static function cartItem()
    {
        $totalItemCart = 0 ;
        $user = auth()->user();

        if($user)
        {
            $cartItems = Cart::where('user_id',$user->id)->get();
            foreach($cartItems as $cartItem)
            {
                $totalItemCart += $cartItem->quantity;
            }
        }
        else
        {
            $cartItems = json_decode(request()->cookie('vaibhav_cart'));
            foreach($cartItems as $cartItem)
            {
                $totalItemCart += $cartItem->quantity;
            }
        }
        return $totalItemCart;
    }

}
