<?php

namespace App\Http\Controllers\icream;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Slider;
use App\Models\backend\ProductsModel;
use App\Models\backend\ServiceModel;
use App\Models\backend\GalleryModel;
use DB;

class IcereamHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('icream-app.content');
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

    //  fetch a data slider in home page
    public function showSlider()
    {
        $slider_data=Slider::get();
        $product_data=ProductsModel::get();
        $service_data=ServiceModel::get();
        $gallery_data=GalleryModel::get();
        return view('icream-app.content',['slider_data'=>$slider_data,'product_data'=>$product_data,'service_data'=>$service_data,'gallery_data'=>$gallery_data]);
    }

    // public function showProduct()
    // {
    //     return view('icream-app.content',['product_data'=>$data]);
    // }

    // public function showService()
    // {
    //     $data=ServiceModel::get();
    //     return view('icream-app.content',['service_data'=>$data]);
    // }

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
