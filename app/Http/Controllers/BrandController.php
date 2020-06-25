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
        $body_class = 'brand-list';
        return view('brands.list',compact('page_title','body_class', 'brands'));

    }

    public function detail($name)
    {
        $brand = Brand::where([
            ['name', '=', $name],
            ['deleted', '=', 0]
        ])->first();
        $page_title = 'Vaibhav - A Unit of 28 South Ventures';
        $body_class = 'brand-detail';
        return view('brands.detail',compact('page_title','body_class', 'brand'));

    }
}
