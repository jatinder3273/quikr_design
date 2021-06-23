<?php

namespace App\Http\Controllers\Front\Category;
use App\Models\SubCategory;
use App\Models\category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function categoryList()
    {
        $category = category::all();
        // echo "<pre>";
        // print($category);
        // die;
        return view('Front.Categories.categorylist',compact('category'));
    }

    public function subcategoryList($id)
    {
        $category = category::find($id);
        $category_id = $category['id'];
        $sub = category::join('subcategory', 'category.id', '=', 'subcategory.category_id')
        ->select('subcategory.name as subcategory_name', 'category.name as category_name')
        ->where('category.id', '=', $category_id)
            ->get();
        //return view('Front.Categories.categorylist', compact('sub'));
        return response()->json([
            'sub' => $sub
        ]);
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
