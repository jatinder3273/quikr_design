<?php

namespace App\Http\Controllers\Admin\Brand;
use Validator;
use App\Models\Brand;
use App\Models\category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $category = category::all();
        // echo "<pre>";
        // print_r($category);die;
        $data = $request->all();
        $query = Brand::query();
        if (array_key_exists('search', $data)) {
            $query->Where('name', 'LIKE', '%' . $data['search'] . '%');
        }
        $brand = $query->paginate(10);
        //dd($company);
        return view('Admin.Brand.index', compact('data', 'brand', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = category::all();
        return view('Admin.Brand.add', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();

        $v = Validator::make(
            $data,
            [
                'name' => 'required|string|unique:category',
                'category_id' => 'required',
            ]
        );

        if ($v->fails()) {
            //echo "fail"; die;
            return redirect()->back()->withErrors($v->errors())->withInput();
        }

        $brand = new Brand();
        $brand->name = $data['name'];
        $brand->category_id = $data['category_id'];
        if ($brand->save()) {
            return redirect('brand')->with(['message' => 'sucess', 'message' => 'recorde added successfully']);
        } else {
            return redirect()->back()->with(['message' => 'sucess', 'message' => 'recorde not added successfully']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $category = category::all();
        $data = Brand::find($id);
        return view('Admin.Brand.edit', compact('data', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = $request->all();
        $v = Validator::make(
            $data,
            [
                'name' => 'required|string',
                'category_id' => 'required',
            ]
        );
        if ($v->fails()) {
            //echo "fail"; die;
            return redirect()->back()->withErrors($v->errors())->withInput();
        }

        $sub = Brand::find($id);
        $sub->name = $data['name'];
        //$sub ->name = $data['name'];
        if ($sub->save()) {
            return redirect('subcategory')->with(['message' => 'sucess', 'message' => 'recorde edit successfully']);
        } else {
            return redirect()->back()->with(['message' => 'sucess', 'message' => 'recorde not edit successfully']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $destroy = Brand::find($id);
        $destroy->delete();
        return redirect('brand')->with(['message' => 'sucess', 'message' => 'recorde delete successfully']);
    }
}
