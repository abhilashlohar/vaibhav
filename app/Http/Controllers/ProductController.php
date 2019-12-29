<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list($category)
    {
        
        
        $products = Product::where([
            ['is_published', '=', true],
            ['deleted', '=', false],
        ])
        ->orderBy('sequence', 'asc')
        ->paginate(5);
  
        return view('products.list',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
