<?php

namespace App\Http\Controllers\admin;

use App\Category;
use App\SubCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::latest()->where('deleted',0)->paginate(5);
        return view('admin.categories.index',compact('categories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Category::rules(), Category::messages());
        

        Category::create($request->all());
   
        return redirect()->route('categories.index')
                        ->with('success','Category created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        // dd($request->image_edit);
        $request->validate(Category::rules($category->id), Category::messages());

        if($request->has('image'))
        {
            $destinationPath = public_path('uploads');
        
            File::delete($destinationPath.'/'.$category->image_path);  /// Unlink File

            $fileName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('uploads'), $fileName);
            $request->request->add(['image_path' => $fileName]);
        }
        
        $category->update($request->all());
  
        return redirect()->route('categories.index')
                        ->with('success','Category updated successfully');
    }

 

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if(SubCategory::where('deleted', 1)->where('category_id',$category->id)->doesntExist())
        {
            $category->deleted = true;
            $category->save();
    
            return redirect()->route('categories.index')
                            ->with('success','Category deleted successfully');
        }
        return redirect()->route('categories.index')
                            ->with('success','Category not deleted, exist in sub categories');
    }


    public static function list()
    {
        return $categories = Category::where('deleted',0)->latest()->get();
    }
}
