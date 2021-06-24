<?php

namespace App\Http\Controllers\Front\Product;
use App\Models\SubCategory;
use App\Models\category;
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
    }
}
