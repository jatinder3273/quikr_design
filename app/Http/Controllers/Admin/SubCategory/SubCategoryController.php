<?php

namespace App\Http\Controllers\Admin\SubCategory;
use Validator;
use App\Models\category;
use App\Models\SubCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
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
        $query = SubCategory::query();
        if (array_key_exists('search', $data)) {
            $query->Where('name', 'LIKE', '%' . $data['search'] . '%');
        }
        $SubCategory = $query->paginate(10);
        //dd($company);
        return view('Admin.SubCategory.index', compact('data', 'SubCategory', 'category'));
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
        return view('Admin.SubCategory.add', compact('category'));
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

        $sub = new SubCategory();
        $sub->name = $data['name'];
        $sub->category_id = $data['category_id'];
        if ($sub->save()) {
            return redirect('subcategory')->with(['message' => 'sucess', 'message' => 'recorde added successfully']);
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
        $data = SubCategory::find($id);
        return view('Admin.SubCategory.edit', compact('data', 'category'));
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

        $sub = SubCategory::find($id);
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
        $destroy = SubCategory::find($id);
        $destroy->delete();
        return redirect('subcategory')->with(['message' => 'sucess', 'message' => 'recorde delete successfully']);
    }
}
