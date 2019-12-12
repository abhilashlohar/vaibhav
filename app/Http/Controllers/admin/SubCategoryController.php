<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\SubCategory;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Middleware\CheckAuth;
use File;

class SubCategoryController extends Controller
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
        $subcategories = SubCategory::where('deleted',0)->latest()->with('Category')->paginate(5);

        return view('admin.subcategories.index',compact('subcategories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('deleted',0)->latest()->get();
        return view('admin.subcategories.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(SubCategory::rules(), SubCategory::messages());
        
        if ($request->hasFile('image_add')) {
            $file = $request->image_add;
            $extension = $request->image_add->extension();
            $fileName = time().'.'.$extension;  
            $path = $request->image_add->storeAs('subcategory', $fileName);
            $request->request->add(['image' => $fileName]);
        }

        SubCategory::create($request->all());
   
        return redirect()->route('subcategories.index')
                        ->with('success','Sub Category created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subcategory)
    {
        $categories = Category::where('deleted',0)->latest()->get();
        return view('admin.subcategories.edit',compact('subcategory','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subcategory)
    {
        $request->validate(SubCategory::rules($subcategory->id), SubCategory::messages());
        if($request->hasFile('image_add'))
        {
            $destinationPath = storage_path('app/public/subcategory');
        
            File::delete($destinationPath.'/'.$subcategory->image);  /// Unlink File
            $file = $request->image_add;
            $extension = $request->image_add->extension();
            $fileName = time().'.'.$extension;  
            $path = $request->image_add->storeAs('subcategory', $fileName);
            $request->request->add(['image' => $fileName]);
        }
        $subcategory->update($request->all());
  
        return redirect()->route('subcategories.index')
                        ->with('success','Sub Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subcategory)
    {
        $subcategory->deleted = true;
        $subcategory->save();
  
        return redirect()->route('subcategories.index')
                        ->with('success','Sub Category deleted successfully');
    }

    public function list(Request $request)
    {
        $subCategories = SubCategory::latest()->where('category_id', $request->category_id)->where('deleted', 0)->get();
        return view('subcategories.list', compact('subCategories'));
    }
}
