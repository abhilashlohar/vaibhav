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

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('home','mail','cartItem','headerCategories','advanceSearch');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {

        $furnitureProducts = Product::with('subCategory.category')->whereHas('category', function($q){
            $q->where('name','=','furniture');
        })->get();

        $consumablesProduct = Product::with('subCategory.category')->whereHas('category', function($q){
            $q->where('name','=','consumables');
        })->first();

        $electricalsProducts = Product::with('subCategory.category')->whereHas('category', function($q){
            $q->where('name','=','electricals');
        })->get();

        $page_title = 'Vaibhav - A Unit of 28 South Ventures';
        $body_class = 'home';

        return view('home', compact('furnitureProducts','consumablesProduct','electricalsProducts','page_title','body_class'));
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
            if($cartItems)
            {
                foreach($cartItems as $cartItem)
                {
                    $totalItemCart += $cartItem->quantity;
                }
            }


        }
        return $totalItemCart;
    }

    public static function headerCategories()
    {
        $headerCategories = Category::with('subCategoryFirst')
        ->where([
            ['deleted', '=', 0]
        ])
        ->whereHas('subCategoryFirst')
        ->orderBy('sequence', 'asc')
        ->get();
        return $headerCategories;
    }
    public function advanceSearch(Request $request)
    {
        $data [] = ['label'=>'Product','product'=>'yes'];
        $data [] = ['label'=>'annhhx10','product'=>''];
        $data [] = ['label'=>'annk K12','product'=>''];
        return json_encode($data);
        // return json_encode(array('like','spike','dike','ikelalcdass'));
        // return view('home', compact('page_title','body_class'));
    }

}
