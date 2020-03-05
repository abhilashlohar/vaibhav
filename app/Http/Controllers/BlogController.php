<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    public function list()
    {
        $blogs = Blog::where([
                    ['status', '=', 'published']
                ])->latest()->get();

        $page_title = 'Vaibhav - A Unit of 28 South Ventures';
        $body_class = 'blog-list';
        return view('blogs.list', compact('page_title','body_class', 'blogs'));
    }

    public function view($slug)
    {
        $blog = Blog::where([
            ['slug', '=', $slug]
        ])->first();

        if (!$blog) {
            echo 'Not Found'; die;
        }
        $recentBlogs = Blog::where([
            ['id', '!=', $blog->id],
            ['status', '=', 'published']
        ])->orderBy('id', 'desc')->take(5)->get();


        $page_title = 'Vaibhav - A Unit of 28 South Ventures';
        $body_class = 'blog-view';
        return view('blogs.view', compact('page_title','body_class', 'blog', 'recentBlogs'));
    }

    public function advanceBlogSearch(Request $request, $search)
    {
        $blogs = Blog::where([
            ['title','like','%'.$search.'%'],
            ['status', '=', 'published']
        ])
        ->orderBy('id', 'desc')
        ->get();
        $category_exist = [];
        foreach($blogs as $blog)
        {
            $data [] = ['label'=>$blog->title,'url'=>route('blogs.view',[$blog->slug]),'category'=>''];
        }
        return response()->json($data);
    }
}
