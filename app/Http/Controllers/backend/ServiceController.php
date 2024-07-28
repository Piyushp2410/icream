<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\backend\ServiceModel;
// use DB;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addservices()
    {
        return view('backend.add-service');
    }

    public function editservices()
    {
        return view('backend.edit-service');
    }

    
    public function index()
    {
        return view('backend.manage-service');
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

        $image=time().'.'.$request->simg->extension();
        $request->simg->move(public_path('uploads'),$image);

        $request->validate([
            "sname" => 'required',
            "sdes" => 'required'
        ]);

        $data = array(
            'service_name' => $request->sname,
            'service_img' => $image,
            'service_des' => $request->sdes
        );

        ServiceModel::create($data);

        return redirect(route('add-service'))->withInput()->with('success','Service Entry Successfully Done :)');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=DB::table('services')
        ->select('services.*','id','service_name','service_img','service_des')
        ->get();
        return view('backend.manage-service',['data'=> $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=ServiceModel::where("id",$id)->first();
        return view('backend.edit-service',['service_data'=>$data]);
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

        $image=time().'.'.$request->simg->extension();
        $request->simg->move(public_path('uploads'),$image);

        $request->validate([
            "sname" => 'required',
            "sdes" => 'required'
        ]);

        $data = array(
            'service_name' => $request->sname,
            'service_img' => $image,
            'service_des' => $request->sdes
        );

        ServiceModel::where("id",$id)->update($data);

        return redirect(route('manage-services'))->withInput()->with('update','Service Details Successfully Updated :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ServiceModel::where('id',$id)->delete();
        return redirect('/admin-login/manage-service')->with('del','Data successfully deleted :)');
    }
}
