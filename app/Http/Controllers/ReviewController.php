<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Review;
use App\OrderRow;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function feedback($product_id, $order_row_id)
    {
        $product = Product::where('id',$product_id)->first();


        $page_title = 'Vaibhav - A Unit of 28 South Ventures';
        $body_class = 'product_review';
        return view('reviews.feedback', compact('page_title','body_class','product', 'order_row_id'));
    }

    public function saveReview(Request $request)
    {
        $user = auth()->user();

        Review::create([
            'product_id' => $request['product_id'],
            'user_id' => $user->id,
            'rating' => $request['stars'],
            'review' => $request['review'],
        ]);

        OrderRow::where('id', $request['order_row_id'])->update(['is_reviewed' => true]);

        return redirect()->route('orders.list')
                        ->with('success','Rating & Review saved successfully.');
    }

}
