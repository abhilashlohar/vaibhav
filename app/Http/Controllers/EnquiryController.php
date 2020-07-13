<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enquiry;
use App\Category;
use Illuminate\Support\Facades\Mail;
use App\Mail\CustomEmailId;

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
        if($request->enquiry_type == 'Care' || $request->enquiry_type == 'furniture' || $request->enquiry_type == 'consumable' || $request->enquiry_type == 'electrical') {
            $ticket_no = $this->newTicketNumber();
            $request->request->add(['ticket_no' => $ticket_no]);
        }
        Enquiry::create($request->all());
        if($request->enquiry_type == 'Care') {
            $from_email = 'service@vaibhavcare.com';
            Mail::to($from_email)->send(
                new CustomEmailId(
                    $from_email,
                    $request->name,
                    $ticket_no,
                    'Your complaint has been submited. Your ticket no. is '.$ticket_no.'.'
                    )
                );
            return redirect()->route('enquiry.care')
                        ->with('success','Your complaint has been submited. Your ticket no. is '.$ticket_no.'.');
        }
        else if ($request->enquiry_type == 'furniture' || $request->enquiry_type == 'consumable' || $request->enquiry_type == 'electrical') {
            if($request->enquiry_type == 'furniture') {
                $from_email = 'info@vaibhavstores.in';
            }
            else if($request->enquiry_type == 'consumable') {
                $from_email = 'enquiry@vaibhavstores.in';
            }
            else if($request->enquiry_type == 'electrical') {
                $from_email = 'enquiry@vaibhavstores.in';
            }
            sendSms($request->mobile_no,"Thank you for placing an inquiry with us. Our representative will contact you soon.");
            Mail::to($from_email)->send(
                new CustomEmailId(
                    $ticket_no,
                    $request->enquiry_message
                    )
                );
                return 'Thank you for enquiry and we will get back to you.';
        }
        elseif ($request->enquiry_type == 'Subscribe Email') {
            return 'Email subscribed successfully.';
        }
        elseif($request->enquiry_type == 'Xpress') {
            Mail::to('sales@vaibhavxpress.com')->send(
                new CustomEmailId(
                    '',
                    $request->enquiry_message
                    )
                );
            return redirect()->route('enquiry.xpress')
                        ->with('success','Enquiry created successfully');
        }
        elseif($request->enquiry_type == 'Plus') {
            Mail::to('sales@vaibhavplus.com')->send(
                new CustomEmailId(
                    '',
                    $request->enquiry_message
                    )
                );
            return redirect()->route('enquiry.plus')
                        ->with('success','Enquiry created successfully');
        }
        elseif($request->enquiry_type == 'brand') {
            Mail::to('sales@vaibhavxpress.com')->send(
                new CustomEmailId(
                    '',
                    $request->enquiry_message
                    )
                );
            return redirect()->route('enquiry.brand')
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
