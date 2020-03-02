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


        $page_title = 'Vaibhav - A Unit of 28 South Ventures';
        $body_class = 'blog-view';
        return view('blogs.view', compact('page_title','body_class', 'blog'));
    }
}
