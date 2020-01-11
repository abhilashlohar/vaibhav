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
        $furnitureProducts = Product::where([
                                ['show_on_home_page','=',1],
                                ['is_published', '=', 1],
                                ['products.deleted', '=', 0]
                            ])->with('subCategory.category')->whereHas('category', function($q){
                                $q->where('name','=','furniture');
                            })->get();

        $consumablesProduct = Product::where([
                                    ['show_on_home_page','=',1],
                                    ['is_published', '=', 1],
                                    ['products.deleted', '=', 0]
                                ])->with('subCategory.category')->whereHas('category', function($q){
                                    $q->where('name','=','consumables');
                                })->first();

        $electricalsProducts = Product::where([
                                    ['show_on_home_page','=',1],
                                    ['is_published', '=', 1],
                                    ['products.deleted', '=', 0]
                                ])->with('subCategory.category')->whereHas('category', function($q){
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
    public function advanceSearch(Request $request, $search)
    {
        $products = Product::where([
            ['name','like','%'.$search.'%'],
            ['is_published', '=', 1],
            ['products.deleted', '=', 0]
        ])
        ->with(['category','category.subCategoryFirst'])
        ->orderBy('category_id', 'asc')
        ->get();
        $category_exist = [];
        foreach($products as $product)
        {
            if(!in_array($product->category,$category_exist))
            {
                $data [] = ['label'=>$product->category->name,'url'=>route('products.list',[$product->category->slug,$product->category->subCategoryFirst->slug]),'category'=>'yes'];
                $category_exist[] = $product->category->id;
            }
            $data [] = ['label'=>$product->name,'url'=>route('products.product-detail',[$product->slug]),'category'=>''];
        }
        return response()->json($data);
    }

}
