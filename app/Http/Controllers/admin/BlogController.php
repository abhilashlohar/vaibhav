<?php

namespace App\Http\Controllers\admin;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Middleware\CheckAuth;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware(CheckAuth::class);
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        // $request->validate(Blog::rules(), Blog::messages());
        
        $blog = Blog::create($request->all());

        return redirect()->route('blogs.edit', $blog->id)
                        ->with('success','Category created successfully.');
    }

    public function edit(Blog $Blog)
    {
        return view('admin.blogs.edit',compact('Blog'));
    }

    public function update(Request $request, Blog $Blog)
    {   
        // $request->validate(Blog::rules($Blog->id), Blog::messages());

        dd($request->all());

        $Blog->update($request->all());
  
        return redirect()->route('blog-categories.index')
                        ->with('success','Category updated successfully');
    }
}
