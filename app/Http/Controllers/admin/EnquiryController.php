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
        // $this->middleware(UserRightsAuth::class);
    }

    public function index(Request $request)
    {
        //  dd($request);

        $where_ar = [];

        if(isset($request->ticket_no)) {
            $where_ar[] = ['enquiries.ticket_no','like','%'.$request->ticket_no.'%'];
        }

        if(isset($request->status)) {
            $where_ar[] = ['enquiries.status','=',$request->status];
        }

        $enquiries = Enquiry::where($where_ar)->orderBy('ticket_no', 'desc')
        ->with('User')
        ->whereHas('User', function($query) use($request)  {
            if(isset($request->name)) {
                $query->where('name','like','%'.$request->name.'%');
            }
        })
        ->paginate(5);

        return view('admin.enquiries.index',compact('enquiries','request'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function show(Enquiry $Enquiry)
    {
        $Enquiry->load('Admin');
        return view('admin.enquiries.show',compact('Enquiry'));
    }


    public function update(Request $request, Enquiry $Enquiry)
    {
        $request->request->add(['closed_at' => date('Y-m-d')]);
        $request->request->add(['closed_by' => $request->session()->get('admin_id')]);
        $request->request->add(['status' => 'closed']);
        $Enquiry->update($request->all());

        return redirect()->route('enquiries.index')
                        ->with('success','Enquiry closed successfully');
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
