<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\backend\GalleryModel;
use App\Models\backend\Category;
use Illuminate\Support\Str;
use DB;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  load a mange gallery page
    public function index()
    {
        return view('backend.manage-gallery');
    }

    //load a Add Gallery Page
    public function addgallery()
    {
        return view('backend.add-gallery');
    }


    // load a Update Gallery Page
    public function eidtgal()
    {
        return view('backend.edit-gallery');
    }

    // load a Add Gallery Category page

   

    
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
        $validator = Validator::make($request->all(), 
        [
            "catid"=> 'required',
            'gimg' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:min_width=500,min_height=350,max_width=500,max_height=350'
        ],
        [
            'catid.required' => 'Please enter your category name.',
            'gimg.required' => 'Please enter your Product Image.',
            'gimg.mimes' => 'The product gallery must be a file of type: jpeg, png, jpg.',
            'gimg.max' => 'The product gallery may not be greater than 2048 kilobytes',
            'gimg.dimensions' => 'Please ensure that the image has a width of 500 pixels and a height of 350 pixels(500x350).'
        ]
    );

       
        // $validator = $request->validate([
        //     ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $image=time().'.'.$request->gimg->extension();
        $request->gimg->move(public_path('uploads/products-img'),$image);


        $data=[
            'category_id'=>$request->catid,
            'catname'=>$request->catid,
            'pgalleryimg'=>$image
        ];

        GalleryModel::create($data);
        return redirect('admin-login/manage-gallery')->withInput()->with('success','Products Image successfully added :)');
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
        ->get();
        return view('backend.add-gallery',['catname'=>$data]);
    }


    
    public function galleryShow()
    {
        // $data=DB::table('product_gallery')
        // ->join('categories', 'product_gallery.category_id', '=', 'categories.id')
        // ->select('product_gallery.*', 'categories.category_name as catname','pgalleryimg')
        // ->latest('product_gallery.created_at')
        // ->get();

        $data=GalleryModel::select('product_gallery.*','categories.category_name as catname','pgalleryimg')
        ->join('categories', 'product_gallery.category_id', '=', 'categories.id')
        ->get();
        // echo "<pre>";
        // print_r($data);
        // die();
        return view('backend.manage-gallery',['gimg'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = GalleryModel::where('id',$id)->first();
        $category_list = Category::get();
        
        
        // $data = DB::table('product_gallery')
        // ->join('gallery_categorys', 'product_gallery.catname', '=', 'gallery_categorys.id')
        // ->where('product_gallery.id', $id)
        // ->select('product_gallery.*', 'gallery_categorys.gallery_cat_name as catname','pgalleryimg')
        // ->first();
        // echo "<pre>";
        // print_r($category_list );
        // die();
        return view('backend.edit-gallery',['catn'=>$data,'cname'=>$category_list]);
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
        $validator = Validator::make($request->all(), [
            "catid"=> 'required',
            'gimg' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:min_width=500,min_height=350,max_width=500,max_height=350'
        ],
        [
            'catid.required' => 'Please enter your category name.',
            'gimg.required' => 'Please enter your Product Image.',
            'gimg.mimes' => 'The gimg must be a file of type: jpeg, png, jpg.',
            'gimg.max' => 'The gimg may not be greater than 2048 kilobytes',
            'gimg.dimensions' => 'Please ensure that the image has a width of 500 pixels and a height of 350 pixels(500x350).'
        ]);

       
        // $validator = $request->validate([
        //     ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $image=time().'.'.$request->gimg->extension();
        $request->gimg->move(public_path('uploads/products-img'),$image);



        $data=[
            'category_id'=>$request->catid,
            'catname'=>$request->catid,
            'pgalleryimg'=>$image
        ];

        GalleryModel::where("id",$id)->update($data);
        return redirect('admin-login/manage-gallery')->withInput()->with('success','Products Image successfully Updated :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        GalleryModel::where('id',$id)->delete();
        return redirect('admin-login/manage-gallery')->with('del','Category Successfully Deleted.!');
    }
}
