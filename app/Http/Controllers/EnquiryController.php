<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function care()
    {
        $page_title = 'Vaibhav - A Unit of 28 South Ventures';
        $body_class = 'care';
        return view('enquiries.care',compact('page_title','body_class'));
    }

    public function plus()
    {
        $page_title = 'Vaibhav - A Unit of 28 South Ventures';
        $body_class = 'plus';
        return view('enquiries.plus',compact('page_title','body_class'));
    }

    public function xpress()
    {
        $page_title = 'Vaibhav - A Unit of 28 South Ventures';
        $body_class = 'xpress';
        return view('enquiries.xpress',compact('page_title','body_class'));
    }
}
