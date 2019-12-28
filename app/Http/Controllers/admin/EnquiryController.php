<?php

namespace App\Http\Controllers\admin;

use App\Enquiry;
use App\EnquiryDetail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Middleware\CheckAuth;
use App\Http\Middleware\UserRightsAuth;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnquiryReplyFromAdmin;

class EnquiryController extends Controller
{
    public function __construct()
    {
        $this->middleware(CheckAuth::class);
        $this->middleware(UserRightsAuth::class);
    }

    public function index()
    {
        $enquiries = Enquiry::orderBy('ticket_no', 'desc')->paginate(5);

        return view('admin.enquiries.index',compact('enquiries'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function show(Enquiry $Enquiry)
    {
        // dd($Enquiry->EnquiryDetails);
        // $EnquiryRows = $Enquiry->EnquiryDetails->with('User')->get();

        return view('admin.enquiries.show',compact('Enquiry'));
    }

    public function reply(Request $request)
    {
        $request->request->add([ 'admin_id'=>$request->session()->get('admin_id') ]);

        $request->validate(EnquiryDetail::rules(), EnquiryDetail::messages());

        $EnquiryDetail = EnquiryDetail::create($request->all());
        $Enquiry = $EnquiryDetail->Enquiry;

        if ($EnquiryDetail->id)
        {
            Mail::to($Enquiry->User->email)->send(
                new EnquiryReplyFromAdmin(
                    $Enquiry->User->name,
                    $Enquiry->ticket_no,
                    $EnquiryDetail->message
                )
            );
        }
        

        return redirect()->route('enquiries.show', $request->enquiry_id)
                        ->with('success','Category created successfully.');
    }
}
