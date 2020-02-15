<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class BrandController extends Controller
{
    public function list()
    {
        $brands = Brand::where([
            ['deleted', '=', 0]
        ])->get();

        $page_title = 'Vaibhav - A Unit of 28 South Ventures';
        $body_class = 'brand';
        return view('brands.list',compact('page_title','body_class', 'brands'));

    }
}
