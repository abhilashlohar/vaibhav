<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function feedback($product_id)
    {
        dd($product_id);
        $user = auth()->user();

        $page_title = 'Vaibhav - A Unit of 28 South Ventures';
        $body_class = 'product_review';
        return view('reviews.feedback', compact('page_title','body_class'));
    }

}
