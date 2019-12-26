<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Product;
use App\ProductImage;
use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;
use App\Http\Middleware\CheckAuth;
use App\Http\Middleware\UserRightsAuth;
use File;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware(CheckAuth::class);
        $this->middleware(UserRightsAuth::class);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('deleted',0)->orderBy('name', 'asc')->with('category','subCategory')->paginate(5);
        // dd($products);
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
        $id = Product::create($request->all())->id;

        return redirect()->route('products.edit', $id)
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
        $productImages = ProductImage::where('product_id',$product->id)->get();
        $categories = Category::where('deleted',0)->latest()->get();
        $subCategories = SubCategory::where('deleted',0)->where('category_id',$product->category_id)->latest()->get();
        $relatedProducts = Product::where('deleted',0)->where('id', '!=', $product->id)->latest()->get();

        return view('admin.products.edit',compact('product','categories','subCategories', 'relatedProducts', 'productImages'));
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
        $destinationPath = storage_path('app/public/product');
        if(isset($request->product_image_delete))
        {
            $product_image_delete_array = explode(',', $request->product_image_delete);
            $deleteProductImages = ProductImage::whereIn('id', [$product_image_delete_array])->get();
            foreach($deleteProductImages as $deleteProductImage)
            {
                File::delete($destinationPath.'/'.$deleteProductImage->image);  /// Unlink File
                ProductImage::where('id', $deleteProductImage->id)->delete();
            }
        }
        if(isset($request->product_image))
        {
            foreach($request->product_image as $product_image)
            {
                if(isset($product_image['image']))
                {

                    if(isset($product_image['old_image']))
                    {
                        File::delete($destinationPath.'/'.$product_image['old_image']);  /// Unlink File
                    }

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
                if(isset($product_image['product_image_id']))
                {
                    DB::table('product_images')
                            ->where('id', $product_image['product_image_id'])
                            ->update([
                                'image' => $fileName, 'is_primary' => $primary
                            ]);
                }
                else
                {
                    DB::table('product_images')->insert(
                        ['product_id' => $product->id, 'image' => $fileName, 'is_primary' => $primary]
                    );
                }

            }
        }

        if(isset($request->related_products))
        {
            $related_products = implode(',', $request->related_products);
            $request->request->add(['related_products' => $related_products]);
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
