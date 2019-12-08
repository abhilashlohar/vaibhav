<?php

namespace App\Http\Controllers;

use App\Enquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $enquiries = Enquiry::latest()->paginate(5);
        return view('enquiries.index',compact('enquiries'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
