<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\SubCategory;
use File;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('deleted',0)->latest()->with('category','subCategory')->paginate(5);
          return view('products.index',compact('products'))
              ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('deleted',0)->get();
        return view('products.create',compact('categories'));
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

        $fileName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads'), $fileName);
        $request->request->add(['image_path' => $fileName]);

        Product::create($request->all());

        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::where('deleted',0)->get();
        $subcategory = SubCategory::find($product->sub_category_id);
        return view('products.edit',compact('product','categories','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {  
        $request->validate(Product::rules($product->id), Product::messages());
       
        if($request->exists('image'))
        {
            $destinationPath = public_path('uploads');
        
            File::delete($destinationPath.'/'.$product->image_path);  /// Unlink File

            $fileName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('uploads'), $fileName);
            $request->request->add(['image_path' => $fileName]);
        }
        
        $product->update($request->all());
  
        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //$destinationPath = public_path('uploads');
        //File::delete($destinationPath.'/'.$product->image_path);  /// Unlink File
        $product->deleted = true;
        $product->save();
  
        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }

    
}
