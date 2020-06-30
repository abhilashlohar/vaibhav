<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enquiry;
use App\Category;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnquiryReplyFromAdmin;

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
        if($request->enquiry_type == 'Care' || $request->enquiry_type == 'Product Enquiry') {
            $ticket_no = $this->newTicketNumber();
            $request->request->add(['ticket_no' => $ticket_no]);
        }
        Enquiry::create($request->all());
        if($request->enquiry_type == 'Care') {
            // Mail::to($request->email)->send(
            //     new EnquiryReplyFromAdmin(
            //         $request->name,
            //         $ticket_no,
            //         'Your complaint has been submited. Your ticket no. is '.$ticket_no.'.'
            //         )
            //     );
            return redirect()->route('enquiry.care')
                        ->with('success','Your complaint has been submited. Your ticket no. is '.$ticket_no.'.');
        }
        elseif ($request->enquiry_type == 'Product Enquiry') {
            sendSms($request->mobile_no,"Thank you for placing an inquiry with us. Our representative will contact you soon.");
            Mail::to($request->email)->send(
                new EnquiryReplyFromAdmin(
                    $request->name,
                    $ticket_no,
                    'Thank you for enquiry and we will get back to you.'
                    )
                );
                return 'Thank you for enquiry and we will get back to you.';
        }
        elseif ($request->enquiry_type == 'Subscribe Email') {
            return 'Email subscribed successfully.';
        }
        elseif($request->enquiry_type == 'Xpress') {
            return redirect()->route('enquiry.xpress')
                        ->with('success','Enquiry created successfully');
        }
        elseif($request->enquiry_type == 'Plus') {
            return redirect()->route('enquiry.plus')
                        ->with('success','Enquiry created successfully');
        }
    }

    public function complaintSearch(Request $request)
    {
        $enquiry = Enquiry::where('ticket_no',$request->ticket_no)->first();

        return view('enquiries.complaint_search',compact('enquiry'));
    }

    public function newTicketNumber()
    {
        $enquiry = Enquiry::where('ticket_no', '>', 0)->latest('ticket_no')->first();
        if ($enquiry) return $enquiry->ticket_no+1;
        else return 1001;
    }

}
