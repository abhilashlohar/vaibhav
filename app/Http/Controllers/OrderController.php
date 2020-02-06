<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\UserAddress;
use App\Order;
use App\OrderRow;
include_once(app_path() . '/razorpay/razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function checkout(Request $request)
    {
        $user = auth()->user();

        $cartItems = Cart::where('user_id',$user->id)->get();

        if (count($cartItems)==0) {
            return redirect()->route('cart');
        }

        $totalAmount = 0;
        foreach ($cartItems as $cartItem) {
            $totalAmount += $cartItem->quantity*$cartItem->product->sale_price;
        }

        $totalItems = count($cartItems);



        #------------------------
        $keyId = 'rzp_test_GE1ObDQkLEiuRm';
        $keySecret = 'EXduVTbD30P8JPrdpXAnKt98';



        $api = new Api($keyId, $keySecret);

        //
        // We create an razorpay order using orders api
        // Docs: https://docs.razorpay.com/docs/orders
        //
        $orderData = [
            'receipt'         => 3456,
            'amount'          => $totalAmount * 100, // 2000 rupees in paise
            'currency'        => 'INR',
            'payment_capture' => 1 // auto capture
        ];

        $razorpayOrder = $api->order->create($orderData);

        $razorpayOrderId = $razorpayOrder['id'];

        $request->session()->put('razorpay_order_id', $razorpayOrderId);

        $displayAmount = $amount = $orderData['amount'];

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
        #------------------------


        $page_title = 'Vaibhav - A Unit of 28 South Ventures';
        $body_class = 'checkout';
        return view('orders.checkout',compact('totalAmount', 'totalItems','page_title','body_class','data','json'));
    }

    public function saveCheckout(Request $request)
    {

        $user = auth()->user();

        $online_payment = "fail";
        $razorpay_order_id = null;
        $razorpay_payment_id = null;
        $razorpay_signature = null;

        $payment_mode = $request->payment_mode;

        if ($payment_mode == "online")
        {
            $keyId = 'rzp_test_GE1ObDQkLEiuRm';
            $keySecret = 'EXduVTbD30P8JPrdpXAnKt98';

            $success = true;

            $error = "Payment Failed";

            if (empty($_POST['razorpay_payment_id']) === false)
            {
                $api = new Api($keyId, $keySecret);

                try
                {
                    // Please note that the razorpay order ID must
                    // come from a trusted source (session here, but
                    // could be database or something else)
                    $attributes = array(
                        'razorpay_order_id' => $request->session()->get('razorpay_order_id'),
                        'razorpay_payment_id' => $_POST['razorpay_payment_id'],
                        'razorpay_signature' => $_POST['razorpay_signature']
                    );

                    $api->utility->verifyPaymentSignature($attributes);
                }
                catch(SignatureVerificationError $e)
                {
                    $success = false;
                    $error = 'Razorpay Error : ' . $e->getMessage();
                }
            }

            if ($success === true)
            {
                $online_payment = "success";
                $razorpay_order_id = $request->session()->get('razorpay_order_id');
                $razorpay_payment_id = $_POST['razorpay_payment_id'];
                $razorpay_signature = $_POST['razorpay_signature'];
            }
            else
            {
                return redirect()->route('cart')
                        ->with('fail','Payment failed.');
            }
        }


        if ($payment_mode == "cod" || $online_payment == "success")
        {

            #Saving Shipping Address
            $UserAddress = new UserAddress;
            $UserAddress->user_id = $user->id;
            $UserAddress->name = $request->ship_name;
            $UserAddress->mobile = $request->ship_mobile;
            $UserAddress->address = $request->ship_address;
            $UserAddress->pincode = $request->ship_pincode;
            $UserAddress->landmark = $request->ship_landmark;
            $UserAddress->state = $request->ship_state;
            $UserAddress->city = $request->ship_city;
            $UserAddress->save();


            $same_as_shipping = $request->same_as_shipping;

            if (!$same_as_shipping) {
                # Saving billing address
                $UserAddress = new UserAddress;
                $UserAddress->user_id = $user->id;
                $UserAddress->name = $request->bill_name;
                $UserAddress->mobile = $request->bill_mobile;
                $UserAddress->address = $request->bill_address;
                $UserAddress->pincode = $request->bill_pincode;
                $UserAddress->landmark = $request->bill_landmark;
                $UserAddress->state = $request->bill_state;
                $UserAddress->city = $request->bill_city;
                $UserAddress->save();
            }


            #Getting all items from user's cart
            $cartItems = Cart::where('user_id',$user->id)->get();

            $totalAmount = 0;
            foreach ($cartItems as $cartItem) {
                $totalAmount += $cartItem->quantity*$cartItem->product->sale_price;
            }


            #Saving Order
            $Order = new Order;
            $Order->order_date = date('Y-m-d H:i:s');
            $Order->user_id = $user->id;
            $Order->order_no = $this->newOrderNumber();
            $Order->order_amount = $totalAmount;
            $Order->payment_mode = $payment_mode;
            $Order->payment_status = 'success';

            $Order->ship_name = $request->ship_name;
            $Order->ship_mobile = $request->ship_mobile;
            $Order->ship_address = $request->ship_address;
            $Order->ship_pincode = $request->ship_pincode;
            $Order->ship_landmark = $request->ship_landmark;
            $Order->ship_state = $request->ship_state;
            $Order->ship_city = $request->ship_city;
            if ($payment_mode == "online") {
                $Order->razorpay_order_id = $razorpay_order_id;
                $Order->razorpay_payment_id = $razorpay_payment_id;
                $Order->razorpay_signature = $razorpay_signature;
            }



            if (!$same_as_shipping) {
                $Order->bill_name = $request->bill_name;
                $Order->bill_mobile = $request->bill_mobile;
                $Order->bill_address = $request->bill_address;
                $Order->bill_pincode = $request->bill_pincode;
                $Order->bill_landmark = $request->bill_landmark;
                $Order->bill_state = $request->bill_state;
                $Order->bill_city = $request->bill_city;
            } else {
                $Order->bill_name = $request->ship_name;
                $Order->bill_mobile = $request->ship_mobile;
                $Order->bill_address = $request->ship_address;
                $Order->bill_pincode = $request->ship_pincode;
                $Order->bill_landmark = $request->ship_landmark;
                $Order->bill_state = $request->ship_state;
                $Order->bill_city = $request->ship_city;
            }
            $Order->save();

            #Saving Order items
            foreach ($cartItems as $cartItem) {
                $OrderRow = new OrderRow;
                $OrderRow->order_id = $Order->id;
                $OrderRow->product_id = $cartItem->product_id;
                $OrderRow->quantity = $cartItem->quantity;
                $OrderRow->price = $cartItem->product->sale_price;
                $OrderRow->amount = $cartItem->quantity*$cartItem->product->sale_price;
                $OrderRow->save();
            }

            Cart::where('user_id',$user->id)->delete();

            return redirect()->route('orders.thanks', $Order->id)
                        ->with('success','Order placed successfully');
        }
    }



    public function newOrderNumber()
    {
        $order = Order::latest('order_no')->limit(1)->first();
        if ($order) return $order->order_no+1;
        else return 1001;
    }


    public function thanks(Request $request)
    {
        $page_title = 'Vaibhav - A Unit of 28 South Ventures';
        $body_class = 'thankyou';
        return view('orders.thanks',compact('page_title','body_class'));
    }

    public function list()
    {
        $user = auth()->user();
        $orders = Order::where('user_id',$user->id)->orderBy('order_date', 'asc')->paginate(5);

        $page_title = 'Vaibhav - A Unit of 28 South Ventures';
        $body_class = 'my_orders';
        return view('orders.list', compact('page_title','body_class','orders'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function show($id)
    {
        $order = Order::where('id',$id)->with('OrderRows')->first();

        $page_title = 'Vaibhav - A Unit of 28 South Ventures';
        $body_class = 'order_view';
        return view('orders.show', compact('page_title','body_class','order'));
    }
}
