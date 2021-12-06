<?php

namespace App\Http\Controllers\Officials_Chapel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ChapelOfficials;

class Chapel_OfficialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data=ChapelOfficials::orderBy('id','asc')->paginate(5);
        return view('officials_chapel.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('officials_chapel.create');
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
            'chapel_location'=>'required',
            'president_name'=>'required',
            'contact_number'=>'required'
        ]);

        $data=new ChapelOfficials();
        $data->chapel_location=$request->chapel_location;
        $data->president_name=$request->president_name;
        $data->contact_number=$request->contact_number;
        $data->save();

        return redirect('chapel_officials/create')->with('msg','Data has been submitted');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=ChapelOfficials::find($id);
        return view('officials_chapel.edit',['data'=>$data]);
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
            'chapel_location'=>'required',
            'president_name'=>'required',
            'contact_number'=>'required'
        ]);

        $data=ChapelOfficials::find($id);
        $data->chapel_location=$request->chapel_location;
        $data->president_name=$request->president_name;
        $data->contact_number=$request->contact_number;
        $data->save();
        return redirect('chapel_officials/'.$id.'/edit')->with('msg','Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ChapelOfficials::where('id',$id)->delete();
        return redirect('chapel_officials');
    }

}
