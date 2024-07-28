<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\backend\ProductsModel;
use DB;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.manage-products');
    }

    public function addproduct()
    {
        return view('backend.add-products');
    }

    public function editproduct()
    {
        return view('backend.edit_product');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image=time().'.'.$request->pimg->extension();
        $request->pimg->move(public_path('uploads'),$image);

        $request->validate([
            "pname" => 'required|max:25',
            "pprice" => 'required|numeric',
            
        ]);

        $data =array(          
            'pname'=>$request->pname,
            'pprice' =>$request->pprice,
            'pimg' =>$image,
            'pdes' =>$request->pdes
        );

        ProductsModel::create($data);

        return redirect('/admin-login/add-products')->withInput()->with('success','Your Product will be added'); 

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=DB::table('products')
        ->select('products.*','id','pname','pprice','pimg','pdes')
        ->get();
    return view('backend.manage-products',['data'=>$data]);
    }


    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=ProductsModel::where("id",$id)->first();
        return view('backend.edit_product',["data"=>$data]);
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
        $image=time().'.'.$request->pimg->extension();
        $request->pimg->move(public_path('uploads'),$image);

        $data =array(          
            'pname'=>$request->pname,
            'pprice' =>$request->pprice,
            'pimg' =>$image,
            'pdes' =>$request->pdes
        );
        ProductsModel::where("id",$id)->update($data);
        return redirect('/admin-login/manage-products')->with("update","Product updated Successfull Updated :)");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        ProductsModel::where('id',$id)->delete();
        return redirect('/admin-login/manage-products')->with('del','Data deleted successfully');
    }
}
