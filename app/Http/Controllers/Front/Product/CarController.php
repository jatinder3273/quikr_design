<?php

namespace App\Http\Controllers\Front\Product;
use App\Models\SubCategory;
use App\Models\category;
use App\Models\Cars;
use Auth;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{
    //
    public function carStore(Request $request)
    {
        $data = $request->all();
        // echo "<pre>";
        // print_r($data);
        // die;
        $v = Validator::make($data,
        [
            'cat_id'=>'required',
            'subcat_id'=>'required',
            'brand_id'=>'required',
            'year_of_registration'=>'required',
            'kms_driven'=>'required',
            'price'=>'required',
            'description'=>'required',
            
        ]);
        if($v->fails())
        {
            echo "fail";
        die;
            return redirect()->back()->withErrors($v->errors())->withInput();
        }
        
        $user_id =Auth::guard('user')->user()->id;
        $cars = new Cars();
        $cars->category_id =$data['cat_id'];
        $cars->subcategory_id = $data['subcat_id'];
        $cars->user_id = $user_id;
        $cars->brand_id = $data['brand_id'];
        $cars->model_id = $data['model_id'];
        $cars->year_of_registration = $data['year_of_registration'];
        $cars->file = $data['file'];
        $cars->description = $data['description'];
        $cars->price = $data['price'];
        $cars->kms_driven = $data['kms_driven'];
        if($cars->save())
        {
            return redirect()->back()->with(['message' => 'sucess', 'message' => 'recorde added successfully']);
        }
        else
        {
            return redirect()->back()->with(['message' => 'sucess', 'message' => 'recorde not added successfully']);
        }
    }
}
