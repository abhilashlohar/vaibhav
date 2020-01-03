<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use View;

class BaseController extends Controller
{
    public function __construct()
    {
        $headerCategories = Category::with('subCategoryFirst')
        ->where([
            ['deleted', '=', 0]
        ])
        ->orderBy('sequence', 'asc')
        ->get();
        View::share('headerCategories', $headerCategories);
    }


}
