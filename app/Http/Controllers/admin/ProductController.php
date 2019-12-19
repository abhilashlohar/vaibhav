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

        if($request->product_image)
        {
            dd($request->product_image);
            // $destinationPath = storage_path('app/public/category');

            // File::delete($destinationPath.'/'.$category->image);  /// Unlink File
            // $file = $request->image_add;
            // $extension = $request->image_add->extension();
            // $fileName = time().'.'.$extension;
            // $path = $request->image_add->storeAs('category', $fileName);
            // $request->request->add(['image' => $fileName]);
        }
        dd(1);

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
