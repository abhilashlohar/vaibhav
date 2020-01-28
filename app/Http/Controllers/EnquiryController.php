<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enquiry;

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
    public function store(Request $request)
    {
        Enquiry::create($request->all());
        if($request->enquiry_type == 'Care') {
            return redirect()->route('enquiry.care')
                        ->with('success','Enquiry created successfully');
        }
        elseif($request->enquiry_type == 'Xpress') {
            return redirect()->route('enquiry.xpress')
                        ->with('success','Enquiry created successfully');
        }
        elseif ($request->enquiry_type == 'Subscribe Email') {
            return 'Enquiry created successfully.';
        }

    }

}
