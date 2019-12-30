<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list($category_slug,$sub_category_slug)
    {


        $category = Category::where([
            ['slug', '=', $category_slug],
            ['deleted', '=', 0]
        ])->first();

        $subCategories = SubCategory::where([
            ['category_id','=',$category->id],
            ['deleted', '=', 0]
        ])
        ->orderBy('sequence', 'asc')->get();


        $subCategoryData = SubCategory::where([
            ['slug','=',$sub_category_slug],
            ['deleted', '=', 0]
        ])->first();

        $products = Product::where([
            ['sub_category_id','=',$subCategoryData->id],
            ['is_published', '=', 1],
            ['deleted', '=', 0]
        ])
        ->orderBy('sequence', 'asc')
        ->get();


        return view('products.list',compact('category','subCategories','subCategoryData','products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
