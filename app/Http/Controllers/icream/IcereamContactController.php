<?php

namespace App\Http\Controllers\icream;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\iceream\IcereamContactModel;
use Illuminate\Support\Facades\DB;



class IcereamContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('icream-app.contact');

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
        //validations 
        $request->validate([
             "name"=>'required|max:255',
             "email"=>'required|email',
             "subject"=>'required',
             "message"=>'required'  
        ]);
        
        // data insert in subjects tables
        $data=array(
          'name'=>$request->name,
          'email'=>$request->email,
          'subject'=>$request->subject,
          'message'=>$request->message
        );
        IcereamContactModel::create($data);
        // /dd($data);
        // create($data) elequent ORM query builder just like insert into tablename(colmananame) values('values')
        return redirect('/contact-us')->withInput()->with('success','Thanks for contact with us we will contact with you soon'); 
    }

    // contacts data fetch in UI
    public function contactsshow()
    {
        // return $contactsdetails = ;
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
