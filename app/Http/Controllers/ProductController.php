<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Builder;
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
        ])->with('subcategory_available_orderBy')->first();

        $subCategoryData = SubCategory::where([
            ['slug','=',$sub_category_slug],
            ['deleted', '=', 0]
        ])->first();

        $products = Product::with('product_image_primary')
        ->where([
            ['sub_category_id','=',$subCategoryData->id],
            ['is_published', '=', 1],
            ['products.deleted', '=', 0]
        ])
        ->orderBy('sequence', 'asc')
        ->get();

        // $products = Product::with(['product_image_primary','subCategory' => function ($query) use ($sub_category_slug) {
        //         $query->where('sub_categories.slug', $sub_category_slug);
        //     }
        // ])
        // ->where([
        //     ['is_published', '=', 1],
        //     ['products.deleted', '=', 0]
        // ])
        // ->orderBy('sequence', 'asc')
        // ->get();

        $page_title = 'Vaibhav - A Unit of 28 South Ventures';
        $body_class = 'product-list';
        return view('products.list',compact('category','subCategoryData','products','page_title','body_class'));
    }

    public function productDetail($product_slug)
    {
        $products = Product::with(['product_image_primary','productImages'])->where([
            ['is_published', '=', 1],
            ['products.deleted', '=', 0],
            ['products.slug', '=', $product_slug]
        ])
        ->first();
        $page_title = 'Vaibhav - A Unit of 28 South Ventures';
        $body_class = 'product-detail';
        return view('products.product-detail',compact('products','page_title','body_class'));
    }




}
