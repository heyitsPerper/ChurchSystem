<?php

namespace App\Http\Controllers\Certificates;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use App\Models\Death;

class DeathController extends Controller
{
    //search deceased name
    public function search(Request $request)  
    {
        if(isset($_GET['query']))
        {
             $search_text = $_GET['query'];
             $deceased_name = Death::where('deceased_name', 'LIKE', '%' .$search_text. '%')->paginate(5);
             return view('certificate_death.index', ['deceased_name'=>$deceased_name]);
        }   
        else                                                                               
        {
             return view('certificate_death.index');
        }
    } 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data=Death::orderBy('burial_date','desc')->paginate(5);
        return view('certificate_death.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('certificate_death.create');
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
            'deceased_name'=>'required',
            'death_date'=>'required|date',
            'burial_date'=>'required|date',
            'status'=>'required',
            'residence'=>'required',
            'sacraments'=>'required',
            'death_cause'=>'required',
            'death_place'=>'required',
            'minister'=>'required'
        ]);
        
        $data=new Death();
        $data->deceased_name=$request->deceased_name;
        $data->death_date=$request->death_date;
        $data->burial_date=$request->burial_date;
        $data->status=$request->status;
        $data->residence=$request->residence;
        $data->sacraments=$request->sacraments;
        $data->death_cause=$request->death_cause;
        $data->death_place=$request->death_place;
        $data->minister=$request->minister;
        $data->save();

        return redirect('death_info/create')->with('msg','Data has been submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Death::find($id);
        return view('certificate_death.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Death::find($id);
        return view('certificate_death.edit',['data'=>$data]);
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
            'deceased_name'=>'required',
            'death_date'=>'required|date',
            'burial_date'=>'required|date',
            'status'=>'required',
            'residence'=>'required',
            'sacraments'=>'required',
            'death_cause'=>'required',
            'death_place'=>'required',
            'minister'=>'required'
        ]);

        $data=Death::find($id);
        $data->deceased_name=$request->deceased_name;
        $data->death_date=$request->death_date;
        $data->burial_date=$request->burial_date;
        $data->status=$request->status;
        $data->residence=$request->residence;
        $data->sacraments=$request->sacraments;
        $data->death_cause=$request->death_cause;
        $data->death_place=$request->death_place;
        $data->minister=$request->minister;
        $data->save(); 

        return redirect('death_info/'.$id.'/edit')->with('msg','Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Death::where('id',$id)->delete();
        return redirect('death_info');
    }

}
