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
}
