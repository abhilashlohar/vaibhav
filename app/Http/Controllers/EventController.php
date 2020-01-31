<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;
use Illuminate\Support\Facades\Route;
include_once(app_path() . '/razorpay/razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

class EventController extends Controller
{
    public function __construct()
    {
        // $name = Route::currentRouteName();
        // if($name == 'event.academyDetails')
        // {
        //     $this->middleware('auth');
        // }
    }
    public function academy()
    {
        $recentEvents = Event::where('event_date', '<', date("Y-m-d"))->orderBy('event_date','DESC')->paginate(8);
        $upcomingEvents = Event::where('event_date', '>=', date("Y-m-d"))->orderBy('event_date','ASC')->get();
        $page_title = 'Vaibhav - A Unit of 28 South Ventures';
        $body_class = 'academy';
        return view('events.academy',compact('recentEvents','upcomingEvents','page_title','body_class'))
            ->with('i', (request()->input('page', 1) - 1) * 8);
    }

    public function academyDetails(Request $request, $id)
    {
        $user = auth()->user();

        $keyId = 'rzp_test_GE1ObDQkLEiuRm';
        $keySecret = 'EXduVTbD30P8JPrdpXAnKt98';
        $api = new Api($keyId, $keySecret);
        $orderData = [
            'receipt'         => 3456,
            'amount'          => 100, // 2000 rupees in paise
            'currency'        => 'INR',
            'payment_capture' => 1 // auto capture
        ];
        $amount = 500;
        $razorpayOrder = $api->order->create($orderData);

        $razorpayOrderId = $razorpayOrder['id'];

        $request->session()->put('razorpay_order_id', $razorpayOrderId);

        $data = [
            "key"               => $keyId,
            "amount"            => $amount,
            "name"              => "VAIBHAV STORES",
            "description"       => "A UNIT OF 28 SOUTH VENTURES",
            "image"             => url('/')."/static/images/logo.png",
            "prefill"           => [
            "name"              => $user->name,
            "email"             => $user->email,
            "contact"           => "",
            ],
            "notes"             => [
            "address"           => "",
            "merchant_order_id" => "",
            ],
            "theme"             => [
            "color"             => "#F37254"
            ],
            "order_id"          => $razorpayOrderId,
        ];


        $json = json_encode($data);


        $event = Event::find($id);
        $page_title = 'Vaibhav - A Unit of 28 South Ventures';
        $body_class = 'academy-detail';
        return view('events.academy-detail',compact('event','page_title','body_class', 'json'))
            ->with('i', (request()->input('page', 1) - 1) * 8);
    }
}
