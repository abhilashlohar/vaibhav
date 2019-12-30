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


        $products = Product::join('product_images', function ($join) {
            $join->on('products.id', '=', 'product_images.product_id')
                 ->where([
                     ['product_images.is_primary', '=', 1]
                     ]);
        })
        ->where([
            ['sub_category_id','=',$subCategoryData->id],
            ['is_published', '=', 1],
            ['products.deleted', '=', 0]
        ])
        ->orderBy('sequence', 'asc')
        ->getQuery()
        ->get();

        return view('products.list',compact('category','subCategories','subCategoryData','products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


}
