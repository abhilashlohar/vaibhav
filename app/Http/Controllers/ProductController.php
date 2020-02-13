<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Builder;
use App\Product;
use App\Category;
use App\SubCategory;
use App\Cart;
use App\Review;
use Illuminate\Http\Request;
class ProductController extends Controller
{
    public function productSearch($searchQuery)
    {

        if($searchQuery != 'viewAll')
        {
            $products = Product::where([
                ['slug','LIKE','%'.$searchQuery.'%'],
                ['is_published', '=', 1],
                ['deleted', '=', 0]
            ])->paginate(5);
        }
        else
        {
            $products = Product::where([
                ['is_published', '=', 1],
                ['deleted', '=', 0]
            ])->paginate(5);
        }

        $page_title = 'Vaibhav - A Unit of 28 South Ventures';
        $body_class = 'product-search';
        return view('products.search',compact('products','page_title','body_class'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function list($category_slug,$sub_category_slug)
    {
        $category = Category::where([
            ['slug', '=', $category_slug],
            ['deleted', '=', 0]
        ])->with('subcategory_available_orderBy')->first();


        $subCategoryData = SubCategory::where([
            ['slug','=',$sub_category_slug],
            ['deleted', '=', 0]
        ])->first();

        $products = Product::with('product_image_primary')
        ->where([
            ['sub_category_id','=',$subCategoryData->id],
            ['is_published', '=', 1],
            ['products.deleted', '=', 0]
        ])
        ->orderBy('sequence', 'asc')
        ->get();


        $page_title = 'Vaibhav - A Unit of 28 South Ventures';
        $body_class = 'product-list product-list-'.$category->template_type;
        return view('products.'.$category->template_type,compact('category','subCategoryData','products','page_title','body_class'));
    }

    public function productDetail($product_slug)
    {
        $product = Product::with(['productImages'])->where([
            ['is_published', '=', 1],
            ['products.deleted', '=', 0],
            ['products.slug', '=', $product_slug]
        ])
        ->first();

        if(!$product)
        {
            abort(404);
        }

        $related_product_ids=explode(',',$product->related_products);
        $related_products = Product::with(['product_image_primary'])
        ->where([
            ['products.is_published', '=', 1],
            ['products.deleted', '=', 0],
        ])
        ->whereIn('id', $related_product_ids)
        ->get();

        $productReviews = Review::with('user')
        ->where('product_id',$product->id)
        ->orderBy('rating', 'desc')
        ->paginate(5);

        $totalReviews = Review::where('product_id',$product->id)->count();

        $rating5 = Review::where([
            ['product_id', $product->id],
            ['rating', 5]
        ])->count();

        $rating4 = Review::where([
            ['product_id', $product->id],
            ['rating', 4]
        ])->count();

        $rating3 = Review::where([
            ['product_id', $product->id],
            ['rating', 3]
        ])->count();

        $rating2 = Review::where([
            ['product_id', $product->id],
            ['rating', 2]
        ])->count();

        $rating1 = Review::where([
            ['product_id', $product->id],
            ['rating', 1]
        ])->count();

        $ratings = Review::where('product_id',$product->id)->avg('rating');
        $page_title = 'Vaibhav - A Unit of 28 South Ventures';
        $body_class = 'product-detail';
        return view('products.product-detail',compact('product','page_title','body_class','related_products', 'productReviews','totalReviews','ratings','rating5','rating4','rating3','rating2','rating1'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function addTocart(Request $request)
    {
        $cart = [];
        $minutes = 60;
        $user = auth()->user();
        $existCookie = false;
        if($user)
        {
            $cartItems = Cart::where('user_id',$user->id)->where('product_id',$request->product_id)->first();
            if($cartItems)
            {
                //update data
                Cart::where('id', $cartItems->id)
                        ->update(['quantity' =>  $cartItems->quantity+1]);
            }
            else
            {
                /// Insert data
                $CartTable = new Cart;
                $CartTable->product_id = $request->product_id;
                $CartTable->user_id = $user->id;
                $CartTable->quantity = 1;
                $CartTable->save();
            }
        }
        else
        {
            if($request->hasCookie('vaibhav_cart'))
            {
                $cartItems = json_decode(request()->cookie('vaibhav_cart'));

                foreach($cartItems  as $cartItem)
                {
                    if($cartItem->product_id == $request->product_id)
                    {
                        $cartItem->quantity += 1;
                        $existCookie = true;
                    }
                    $cart[]=['product_id'=>$cartItem->product_id,'quantity'=>$cartItem->quantity];
                }
                if(!$existCookie)
                {
                    $cart[]=['product_id'=>$request->product_id,'quantity'=>1];
                }
            }
            else
            {
                $cart[]=['product_id'=>$request->product_id,'quantity'=>1];
            }
            $array_json=json_encode($cart);
            \Cookie::queue('vaibhav_cart', $array_json, $minutes);
        }
        return redirect()->route('cart')
                        ->with('success','Item added into cart successfully.');
    }

    // public function addTocart(Request $request)
    // {
    //     $cart = [];
    //     $minutes = 60;
    //     $user = auth()->user();
    //     $existCookie = false;
    //     if($user)
    //     {
    //         $cartItems = Cart::where('user_id',$user->id)->get();

    //         if($request->hasCookie('vaibhav_cart'))
    //         {
    //             $cookieValues = json_decode($request->cookie('vaibhav_cart'));

    //             foreach($cookieValues  as $cookieValue)
    //             {
    //                 if($cookieValue->product_id == $request->product_id)
    //                 {
    //                     $cookieValue->quantity += 1;
    //                     $existCookie = true;
    //                 }
    //                 $cart[]=['product_id'=>$cookieValue->product_id,'quantity'=>$cookieValue->quantity];
    //             }
    //             if(!$existCookie)
    //             {
    //                 $cart[]=['product_id'=>$request->product_id,'quantity'=>1];
    //             }
    //             \Cookie::queue(\Cookie::forget('vaibhav_cart'));
    //             $match_array = [];
    //             foreach($cartItems  as $cartItem)
    //             {
    //                 foreach($cart  as $key => $cartValue)
    //                 {
    //                     if($cartValue['product_id'] == $cartItem->product_id)
    //                     {
    //                         /// Update data
    //                         Cart::where('id', $cartItem->id)
    //                         ->update(['quantity' =>  $cartItem->quantity+$cartValue['quantity']]);
    //                         unset($cart[$key]);
    //                     }

    //                 }
    //             }
    //             foreach($cart  as $key => $cartValue)
    //             {

    //                 $CartTable = new Cart;
    //                 $CartTable->product_id = $cartValue['product_id'];
    //                 $CartTable->user_id = $user->id;
    //                 $CartTable->quantity = $cartValue['quantity'];
    //                 $CartTable->save();
    //             }
    //         }
    //         else
    //         {
    //             foreach($cartItems  as $cartItem)
    //             {
    //                 if($cartItem->product_id == $request->product_id)
    //                 {
    //                     $cartItem->quantity += 1;
    //                     $existCookie = true;
    //                     /// Update data
    //                     Cart::where('id', $cartItem->id)
    //                         ->update(['quantity' =>  $cartItem->quantity]);
    //                 }
    //             }
    //             if(!$existCookie)
    //             {
    //                 /// Insert data
    //                 $CartTable = new Cart;
    //                 $CartTable->product_id = $request->product_id;
    //                 $CartTable->user_id = $user->id;
    //                 $CartTable->quantity = 1;
    //                 $CartTable->save();
    //             }
    //         }
    //     }
    //     else
    //     {
    //         if($request->hasCookie('vaibhav_cart'))
    //         {
    //             $cartItems = json_decode(request()->cookie('vaibhav_cart'));

    //             foreach($cartItems  as $cartItem)
    //             {
    //                 if($cartItem->product_id == $request->product_id)
    //                 {
    //                     $cartItem->quantity += 1;
    //                     $existCookie = true;
    //                 }
    //                 $cart[]=['product_id'=>$cartItem->product_id,'quantity'=>$cartItem->quantity];
    //             }
    //             if(!$existCookie)
    //             {
    //                 $cart[]=['product_id'=>$request->product_id,'quantity'=>1];
    //             }
    //         }
    //         else
    //         {
    //             $cart[]=['product_id'=>$request->product_id,'quantity'=>1];
    //         }
    //         $array_json=json_encode($cart);
    //         \Cookie::queue('vaibhav_cart', $array_json, $minutes);

    //         // return response('Set Cookie')->cookie(cookie('vaibhav_cart', $array_json, $minutes));
    //     }
    //     return redirect()->route('cart')
    //                     ->with('success','Item added into cart successfully.');
    // }

    // public function getCookie(Request $request)
    // {
    //     return $cookieValues = json_decode($request->cookie('vaibhav_cart'));
    // }




}
