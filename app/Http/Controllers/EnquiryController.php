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
        if($request->enquiry_type == 'Care') {
            $ticket_no = $this->newTicketNumber();
            $request->request->add(['ticket_no' => $ticket_no]);
        }
        Enquiry::create($request->all());
        if($request->enquiry_type == 'Care') {
            return redirect()->route('enquiry.care')
                        ->with('success','Your complaint has been submited. Your ticket no. is '.$ticket_no.'.');
        }
        elseif($request->enquiry_type == 'Xpress') {
            return redirect()->route('enquiry.xpress')
                        ->with('success','Enquiry created successfully');
        }
        elseif($request->enquiry_type == 'Plus') {
            return redirect()->route('enquiry.plus')
                        ->with('success','Enquiry created successfully');
        }
        elseif ($request->enquiry_type == 'Subscribe Email') {
            return 'Email subscribed successfully.';
        }
    }

    public function complaintSearch(Request $request)
    {
          $enquiry = Enquiry::where('ticket_no',$request->ticket_no)->first();
          return view('enquiries.complaint_search',compact('enquiry'));
    }

    public function newTicketNumber()
    {
        $enquiry = Enquiry::latest('ticket_no')->limit(1)->first();
        if ($enquiry) return $enquiry->ticket_no+1;
        else return 1001;
    }

}
