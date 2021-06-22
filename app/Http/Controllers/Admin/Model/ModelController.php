<?php

namespace App\Http\Controllers\Admin\Model;
use Validator;
use App\Models\Brand;
use App\Models\Models;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $brand = Brand::all();
        // echo "<pre>";
        // print_r($category);die;
        $data = $request->all();
        $query = Models::query();
        if (array_key_exists('search', $data)) {
            $query->Where('name', 'LIKE', '%' . $data['search'] . '%');
        }
        $model = $query->paginate(10);
        //dd($company);
        return view('Admin.Model.index', compact('data', 'brand', 'model'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $brand = Brand::all();
        return view('Admin.Model.add', compact('brand'));
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
                'name' => 'required|string|unique:brand',
                'brand_id' => 'required',
            ]
        );

        if ($v->fails()) {
            //echo "fail"; die;
            return redirect()->back()->withErrors($v->errors())->withInput();
        }

        $model = new Models();
        $model->name = $data['name'];
        $model->brand_id = $data['brand_id'];
        if ($model->save()) {
            return redirect('model')->with(['message' => 'sucess', 'message' => 'recorde added successfully']);
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
        $brand = Brand::all();
        $data = Models::find($id);
        return view('Admin.Model.edit', compact('data', 'brand'));
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
                'brand_id' => 'required',
            ]
        );
        if ($v->fails()) {
            //echo "fail"; die;
            return redirect()->back()->withErrors($v->errors())->withInput();
        }

        $models = Models::find($id);
        $models->name = $data['name'];
        //$sub ->name = $data['name'];
        if ($models->save()) {
            return redirect('model')->with(['message' => 'sucess', 'message' => 'recorde edit successfully']);
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
        $destroy = Models::find($id);
        $destroy->delete();
        return redirect('model')->with(['message' => 'sucess', 'message' => 'recorde delete successfully']);
    }
}
