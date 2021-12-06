<?php

namespace App\Http\Controllers\Collections_Chapel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ChapelCollections;

class Chapel_CollectionsController extends Controller
{
   //search celebration date
   public function search(Request $request)  
   {
       if(isset($_GET['query']))
       {
            $search_text = $_GET['query'];
            $date = ChapelCollections::where('date', 'LIKE', '%' .$search_text. '%')->paginate(5);
            return view('collections_chapel.index', ['date'=>$date]);
       }   
       else
       {
            return view('collections_chapel.index');
       }
   } 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data=ChapelCollections::orderBy('date','asc')->paginate(5);
        return view('collections_chapel.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('collections_chapel.create');
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
            'time'=>'required',
            'place'=>'required',
            'celebration_type'=>'required',
            'first_collection'=>'required',
        ]);

        $data=new ChapelCollections();
        $data->date=$request->date;
        $data->time=$request->time;
        $data->place=$request->place;
        $data->celebration_type=$request->celebration_type;
        $data->first_collection=$request->first_collection;
        $data->save();

        return redirect('chapel_collections/create')->with('msg','Data has been submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=ChapelCollections::find($id);
        return view('collections_chapel.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=ChapelCollections::find($id);
        return view('collections_chapel.edit',['data'=>$data]);
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
            'time'=>'required',
            'place'=>'required',
            'celebration_type'=>'required',
            'first_collection'=>'required',
        ]);

        $data=ChapelCollections::find($id);
        $data->date=$request->date;
        $data->time=$request->time;
        $data->place=$request->place;
        $data->celebration_type=$request->celebration_type;
        $data->first_collection=$request->first_collection;
        $data->save();

        return redirect('chapel_collections/'.$id.'/edit')->with('msg','Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ChapelCollections::where('id',$id)->delete();
        return redirect('chapel_collections');
    }

}
