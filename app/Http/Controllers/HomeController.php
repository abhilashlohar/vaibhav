<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use App\Product;
use App\Enquiry;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth')->except(['home', 'contact', 'products', 'enquiry', 'saveenquiry', 'aboutus']);;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('home');
    }

    public function contact()
    {
        return view('contact');
    }

    public function aboutus()
    {
        return view('aboutus');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public static function products(Request $request)
    {
        $category = Category::where('id',$request->id)->first();
        $SubCategories = SubCategory::where('deleted',0)->with('products')->latest()->where('category_id',$request->id)->get();

        return view('products',compact('category', 'SubCategories'));
    }    
    
    public static function enquiry(Request $request)
    {
        $product = Product::where('id',$request->id)->first();
        return view('enquiry',compact('product'));
    }

    public function saveenquiry(Request $request)
    {

        Enquiry::create($request->all());

        return redirect()->route('home');
    }
}
