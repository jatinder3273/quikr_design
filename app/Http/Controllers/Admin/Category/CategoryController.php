<?php

namespace App\Http\Controllers\Admin\Category;
use Validator;
use DB;
use App\Models\category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = $request->all();
        $query = category::query();
        if (array_key_exists('search', $data)) {
            $query->Where('name', 'LIKE', '%' . $data['search'] . '%');
        }
        $category = $query->paginate(10);
        //dd($category);
        return view('Admin.Category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.Category.add');
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
        $data =$request->all();
        // echo "<pre>";
        // print_r($data);
        // die;
        $v = Validator::make($data,
        [
            'name'=>'required|string',
        ]);
        if($v->fails())
        {
            return redirect()->back()->withErrors($v->errors())->withInput();
        }

        $category = new category();
        $category->name = $data['name'];
        if($category->save())
        {
            return redirect('category')->with(['message' => 'sucess', 'message' => 'recorde added successfully']);
        }
        else 
        {
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
        $data = category::find($id);
        $category_id = $data['id'];
        $sub = DB::table('category')
        ->join('subcategory', 'category.id', '=', 'subcategory.category_id')
        ->select('subcategory.name as subcategory_name', 'category.name as category_name')
        ->where('category.id', '=', $category_id)
            ->get();
        // dd($sub);die;
        return view('Admin.Category.show', compact('data', 'sub'));
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
        $data = category::find($id);
        return view('Admin.Category.edit', compact('data'));
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
                'name' => 'required|string|unique:category',
            ]
        );
        if ($v->fails()) {
            //echo "fail"; die;
            return redirect()->back()->withErrors($v->errors())->withInput();
        }

        $category = category::find($id);
        $category->name = $data['name'];
        if ($category->save()) {
            return redirect('category')->with(['message' => 'sucess', 'message' => 'recorde edit successfully']);
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
        $destroy = category::find($id);
        $destroy->delete();
        return redirect('category')->with(['message' => 'sucess', 'message' => 'recorde delete successfully']);
    }
}
