<?php

namespace App\Http\Controllers\admin;

use App\Enquiry;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Middleware\CheckAuth;

class EnquiryController extends Controller
{
    public function __construct()
    {
        $this->middleware(CheckAuth::class);
    }

    public function index()
    {
        $enquiries = Enquiry::orderBy('ticket_no', 'desc')->paginate(5);

        return view('admin.enquiries.index',compact('enquiries'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
