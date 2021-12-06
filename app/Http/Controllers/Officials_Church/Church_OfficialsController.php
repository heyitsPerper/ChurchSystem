<?php

namespace App\Http\Controllers\Officials_Church;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ChurchOfficials;

class Church_OfficialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data=ChurchOfficials::orderBy('id','asc')->paginate(5);
        return view('officials_church.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('officials_church.create');
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
            'position'=>'required',
            'official_name'=>'required|max:255',
            'contact_number'=>'required|numeric|digits:11'
        ]);

        $data=new ChurchOfficials();
        $data->position=$request->position;
        $data->official_name=$request->official_name;
        $data->contact_number=$request->contact_number;
        $data->save();

        return redirect('church_officials/create')->with('msg','Data has been submitted');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=ChurchOfficials::find($id);
        return view('officials_church.edit',['data'=>$data]);
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
        $request->validate([
            'position'=>'required',
            'official_name'=>'required',
            'contact_number'=>'required'
        ]);

        $data=ChurchOfficials::find($id);
        $data->position=$request->position;
        $data->official_name=$request->official_name;
        $data->contact_number=$request->contact_number;
        $data->save();
        
        return redirect('church_officials/'.$id.'/edit')->with('msg','Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ChurchOfficials::where('id',$id)->delete();
        return redirect('church_officials');
    }

}
