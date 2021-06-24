<?php

namespace App\Http\Controllers\Front\Product;
use App\Models\category;
use App\Models\Brand;
use App\Models\SubCategory;
use App\Models\Models;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    //show views of products
    public function addView($category_id,$sub_id)
    {
        //$brands =brand::with('brand')->get();
        //$model = Models::with('brand')->get();
        // echo "<pre>";
        // print_r($model);
        // die;
        $cat_id = category::find($category_id);
        $subcat_id = SubCategory::find($sub_id);
        $cat =$cat_id->id;
        $brand = brand::join('category', 'category.id', '=', 'brand.category_id')
        ->select('brand.name as brand_name','brand.id as brand_id')
        ->where('category.id', '=', $cat)
        ->get();
        // echo "<pre>";
        // print_r($brand);
        // die;
        if($category_id == 2)
        {
            return view('Front.QuickrProduct.Cars_&_Bikes.add',compact('cat_id','subcat_id','brand'));
        }
        elseif($category_id == 3)
        {
            return view('Front.QuickrProduct.Mobiles_&_Tablets.add', compact('cat_id', 'subcat_id', 'brand'));
        }
        elseif($category_id == 4)
        {
            return view('Front.QuickrProduct.Electronics _&_Appliances.add', compact('cat_id', 'subcat_id', 'brand'));

        }
        else {
            return view('Front.QuickrProduct.Cars_&_Bikes.add');
        }
        
    }

    public function showmodel(Request $request)
    {
       $brand = $request->all();
       $brand_id = $brand['id'];
        // echo "<pre>";
        // print_r($brand['id']);
        // die;
        $model = Brand::join('model', 'brand.id', '=', 'model.brand_id')
        ->select('model.name as model_name', 'model.id as model_id', 'brand.name as brand_name', 'brand.id as brand_id')
        ->where('brand.id', '=', $brand_id)
            ->get();

        //return view('Front.Categories.categorylist', compact('sub'));
        return response()->json(['model' => $model]);
    }
}
