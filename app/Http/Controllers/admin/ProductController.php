<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Product;
use App\ProductImage;
use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;
use App\Http\Middleware\CheckAuth;
use File;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware(CheckAuth::class);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('deleted',0)->orderBy('name', 'asc')->paginate(5);

        return view('admin.products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Product::rules(), Product::messages());
        Product::create($request->all());

        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::where('deleted',0)->latest()->get();
        $subCategories = SubCategory::where('deleted',0)->where('category_id',$product->category_id)->latest()->get();
        $relatedProducts = Product::where('deleted',0)->latest()->get();
        return view('admin.products.edit',compact('product','categories','subCategories', 'relatedProducts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

        $request->validate(Product::rules($product->id), Product::messages());

        if(isset($request->product_image_delete))
        {
            foreach($request->product_image_delete as $product_delete)
            {
                DB::table('product_images')->where('id', '=', $product_delete['id'])->delete();
            }
        }
        if(isset($request->product_image))
        {

            foreach($request->product_image as $product_image)
            {

                if(isset($product_image['image']))
                {
                    $destinationPath = storage_path('app/public/product');

                    // File::delete($destinationPath.'/'.$category->image);  /// Unlink File
                    $file = $product_image['image'];
                    $extension = $product_image['image']->extension();
                    $fileName = time().'.'.$extension;
                    $path = $product_image['image']->storeAs('product', $fileName);
                }
                else if(isset($product_image['old_image']))
                {
                    $fileName = $product_image['old_image'];
                }
                if(isset($product_image['primary']))
                {
                    $primary = $product_image['primary'];
                }
                else
                {
                    $primary = 0;
                }
                DB::table('product_images')->updateOrInsert([
                    ['product_id', $product->id, 'image' => $fileName, 'is_primary' => $primary]
                ]);
            }
        }

        $product->update($request->all());

        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->deleted = true;
        $product->save();

        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
}
