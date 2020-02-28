<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    public function list()
    {
        $page_title = 'Vaibhav - A Unit of 28 South Ventures';
        $body_class = 'blog-list';
        return view('blogs.list', compact('page_title','body_class'));
    }
}
