<?php

namespace App\Http\Controllers\Collections_Church;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ChurchCollections;
use Carbon\Carbon;

class Church_CollectionsController extends Controller
{ 
   //search celebration date
   public function search(Request $request)  
   {
       if(isset($_GET['query']))
       {
            $search_text = $_GET['query'];
            $date = ChurchCollections::where('date', 'LIKE', '%' .$search_text. '%')->paginate(5);
            return view('collections_church.index', ['date'=>$date]);
       }   
       else
       {
            return view('collections_church.index');
       }
   } 
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function index()
    {   
        $data=ChurchCollections::orderBy('date','asc')->paginate(5);
        return view('collections_church.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('collections_church.create');
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
            'date'=>'required',
            'celebration_type'=>'required',
            'time'=>'required',
            'first_collection'=>'required',
            'second_collection'=>'required',
        ]);

        $data=new ChurchCollections();
        $data->date=$request->date;
        $data->celebration_type=$request->celebration_type;
        $data->time=$request->time;
        $data->first_collection=$request->first_collection;
        $data->second_collection= $request->second_collection;
        $data->total=$request->first_collection +  $request->second_collection;
        $data->save();

        return redirect('church_collections/create')->with('msg','Data has been submitted');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=ChurchCollections::find($id);
        return view('collections_church.edit',['data'=>$data]);
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
            'date'=>'required',
            'celebration_type'=>'required',
            'time'=>'required',
            'first_collection'=>'required',
            'second_collection'=>'required',
        ]);

        $data=ChurchCollections::find($id);
        $data->date=$request->date;
        $data->celebration_type=$request->celebration_type;
        $data->time=$request->time;
        $data->first_collection=$request->first_collection;
        $data->second_collection=$request->second_collection;
        $data->total=$request->first_collection +  $request->second_collection;
        $data->save();

        return redirect('church_collections/'.$id.'/edit')->with('msg','Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ChurchCollections::where('id',$id)->delete();
        return redirect('church_collections');
    }




   
}