<?php

namespace App\Http\Controllers\icream;
use App\Http\Controllers\Controller;
use App\Models\backend\GalleryModel;
use Illuminate\Http\Request;
use DB;

class IcreamGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('icream-app.gallery');
    }


    // fetch data form gallery category
    // public function showcat()
    // {
    //     $data=DB::table('categories')
    //     ->select('categories.*','gallery_cat_name')
    //     ->get();
    //     return view('icream-app.gallery',['catname'=>$data]);
    // }

    public function galleryImg()
    {
        $data = GalleryModel::select('product_gallery.*', 'categories.category_name as catname', 'pgalleryimg')
                ->join('categories', 'product_gallery.category_id', '=', 'categories.id')
                ->get();
    
        return $data;
    }
    
    public function showGallery()
    {
        $galleryData = $this->galleryImg();
    
        // Check if $galleryData is not empty
        if ($galleryData->isNotEmpty()) {
            return view('icream-app.gallery', ['catname' => $galleryData]);
        } else {
            return view('icream-app.gallery', ['catname' => null]);
        }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
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
    }
}
