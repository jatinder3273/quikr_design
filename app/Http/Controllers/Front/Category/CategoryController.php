<?php

namespace App\Http\Controllers\Front\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function categoryList()
    {
        return view('Front.Categories.categorylist');
    }

    public function categoryView()
    {
        return view('Front.Categories.view');
    }

    public function categoryDetail()
    {
        return view('Front.Categories.detail');
    }
}
