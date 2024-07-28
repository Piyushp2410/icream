<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\backend\Slider;
// use Illuminate\Validation\Validator;
use DB;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.slider.index');
    }
    // load a add page 
    public function addslider()
    {
        return view('backend.slider.create');
    }
    // load a update page 
    public function editslider()
    {
        return view('backend.slider.edit');
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
       $validator=Validator::make($request->all(),
       
       [
        "slide_name"=>'required|max:50',
        "slide_btn_url"=>'required|max:255',
        'slide_img' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:min_width=1366,min_height=800,max_width=1366,max_height=800'

       ],
       [
            'slide_name.required' => 'Please enter your slider name.',
            'slide_btn_url.required' => 'Please enter your slider url.',
            'slide_img.required' => 'Please enter your slider Image.',
            'slide_img.mimes' => 'The slider must be a file of type: jpeg, png, jpg.',
            'slide_img.max' => 'The slider may not be greater than 2048 kilobytes',
            'slide_img.dimensions' => 'Please ensure that the image has a width of 1366 pixels and a height of 800 pixels(1366x800).'
       ]
    );

        // $request->validate([
           
            
        // ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $image=time().'.'.$request->slide_img->extension();
        $request->slide_img->move(public_path('uploads/slider-img'),$image);

        $data=[
            "slide_name"=>$request->slide_name,
            "slide_btn_name"=>$request->slide_btn_url,
            "slide_img"=>$image
        ];

        Slider::create($data);
        
        return redirect(route('slider-home'))->withInput()->with('success', 'Slide details inserted :)');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = DB::table('sliders')
            ->select('sliders.*', 'slide_name', 'slide_btn_name', 'slide_img')
            ->latest('id') // Add the latest function here
            ->get();
            
        return view('backend.slider.index', ['slide_data' => $data]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Slider::where('id',$id)->first();
        return view('backend.slider.edit',['slider_data'=>$data]);
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
        $validator=Validator::make($request->all(),
       
       [
        "slide_name"=>'required|max:50',
        "slide_btn_url"=>'required|max:255',
        'slide_img' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:min_width=1366,min_height=800,max_width=1366,max_height=800'

       ],
       [
            'slide_name.required' => 'Please enter your slider name.',
            'slide_btn_url.required' => 'Please enter your slider url.',
            'slide_img.required' => 'Please enter your slider Image.',
            'slide_img.mimes' => 'The slider must be a file of type: jpeg, png, jpg.',
            'slide_img.max' => 'The slider may not be greater than 2048 kilobytes',
            'slide_img.dimensions' => 'Please ensure that the image has a width of 1366 pixels and a height of 800 pixels(1366x800).'
       ]
    );

        // $request->validate([
           
            
        // ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $image=time().'.'.$request->slide_img->extension();
        $request->slide_img->move(public_path('uploads/slider-img'),$image);

        $data=[
            "slide_name"=>$request->slide_name,
            "slide_btn_name"=>$request->slide_btn_url,
            "slide_img"=>$image
        ];

        Slider::where('id',$id)->update($data);
        return redirect(route('slider-home'))->withInput()->with('update','your slide Details Updated :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Slider::where('id',$id)->delete();
        return redirect(route('slider-home'))->with('del','Slider Deleted.');
    }



}
