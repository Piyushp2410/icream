<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Category;
use DB;
class GalleryCatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  load a Gallery Category page
    public function index()
    {
        return view('backend.add-gallery-category');
    }

    // laod a gallery Category page
    public function managecat()
    {
        return view('backend.manage-gallery-category');
    }

    // load a edit gallery category page
    public function editcat()
    {
        return view('backend.edit-gallery-category');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "catname" => 'required|max:20'
        ]);

        $data=array(
            'category_name'=>$request->catname
        );

        Category::create($data);
        return redirect('/admin-login/add-gallery-category')->withInput()->with('success','Gallery Category added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      $data=DB::table('categories')
      ->select('categories.*','id','category_name')
      ->latest('id')
      ->get();
      return view('backend.manage-gallery-category',['catname'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Category::where('id',$id)->first();
        return view('backend.edit-gallery-category',['catdata'=>$data]);
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
        $data=[
            'category_name'=>$request->catname
        ];
        Category::where('id',$id)->update($data);
        return redirect('admin-login/manage-gallery-category')->with('success','Category Successfully Updated. :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        GalleryCatModel::where('id',$id)->delete();
        return redirect('admin-login/manage-gallery-category')->with('del','Category Successfully Deleted.!');
    }



}
