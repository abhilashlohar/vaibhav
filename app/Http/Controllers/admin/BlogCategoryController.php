<?php

namespace App\Http\Controllers\admin;

use App\BlogCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Middleware\CheckAuth;

class BlogCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware(CheckAuth::class);
    }

    public function index()
    {
        $blogCategories = BlogCategory::where('deleted',0)->orderBy('name', 'asc')->paginate(5);

        return view('admin.blog-categories.index',compact('blogCategories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.blog-categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(BlogCategory::rules(), BlogCategory::messages());
        
        BlogCategory::create($request->all());
   
        return redirect()->route('blog-categories.index')
                        ->with('success','Category created successfully.');
    }

    public function edit(BlogCategory $BlogCategory)
    {
        return view('admin.blog-categories.edit',compact('BlogCategory'));
    }

    public function update(Request $request, BlogCategory $BlogCategory)
    {   
        $request->validate(BlogCategory::rules($BlogCategory->id), BlogCategory::messages());

        $BlogCategory->update($request->all());
  
        return redirect()->route('blog-categories.index')
                        ->with('success','Category updated successfully');
    }


    
}
