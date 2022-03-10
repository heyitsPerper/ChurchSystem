<?php

namespace App\Http\Controllers\Certificates;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Marriage;
use Carbon\Carbon; 

class MarriageController extends Controller
{
    //search husband or wife name
    public function search(Request $request) 
    {
        if(isset($_GET['query']))
        {
             $search_text = $_GET['query'];
             $hhusbandname = Marriage::where('hhusbandname', 'LIKE', '%' .$search_text. '%')->paginate(5);
             $wwifename = Marriage::where('wwifename', 'LIKE', '%' .$search_text. '%')->paginate(5);
             return view('certificate_marriage.index', ['hhusbandname'=>$hhusbandname, 'wwifename'=>$wwifename ]);
        }   
        else
        {
             return view('certificate_marriage.index');
        }
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data=Marriage::orderBy('id','asc')->paginate(5);
        return view('certificate_marriage.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('certificate_marriage.create');
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
            'hhusbandname'=>'required',
            'hbirthdate'=>'required|date',
            'hage'=>'required|integer',
            'hbirthplace'=>'required',
            'hcitizenship'=>'required',
            'hhusbandresidence'=>'required',
            'hreligion'=>'required',
            'hcivilstatus'=>'required',
            'hfathername'=>'required',
            'hfathercitizenship'=>'required',
            'hmothername'=>'required',
            'hmothercitizenship'=>'required',
            'hwitness'=>'required',
            'hwitnessrelationship'=>'required',
            'hwitnessresidence'=>'required',
            'wwifename'=>'required',
            'wbirthdate'=>'required|date',
            'wage'=>'required|integer',
            'wbirthplace'=>'required',
            'wcitizenship'=>'required',
            'wwiferesidence'=>'required',
            'wreligion'=>'required',
            'wcivilstatus'=>'required',
            'wfathername'=>'required',
            'wfathercitizenship'=>'required',
            'wmothername'=>'required',
            'wmothercitizenship'=>'required',
            'wwitness'=>'required',
            'wwitnessrelationship'=>'required',
            'wwitnessresidence'=>'required',
            'marriagecontractdate'=>'required|date',
            'minister'=>'required'
            
        ]);
        //getting the current date
        $current_date=Carbon::now();
        //validating if the husband's age inputted is correct, by subtracting the current date to the birth date
        $hbirthdate=new Carbon(request('hbirthdate'));
        $hage=$current_date->year - $hbirthdate->year;
        //validating if the wife's age is correct
        $wbirthdate=new Carbon(request('wbirthdate'));
        $wage=$current_date->year - $wbirthdate->year;

            //validating age success: save to database
            if  ((request('hage')==$hage) && (request('wage')==$wage))
            {
                 //saving data
                $data=new Marriage();
                $data->hhusbandname=$request->hhusbandname;
                $data->hbirthdate=$request->hbirthdate;
                $data->hage=$request->hage;
                $data->hbirthplace=$request->hbirthplace;
                $data->hcitizenship=$request->hcitizenship;
                $data->hhusbandresidence=$request->hhusbandresidence;
                $data->hreligion=$request->hreligion;
                $data->hcivilstatus=$request->hcivilstatus;
                $data->hfathername=$request->hfathername;
                $data->hfathercitizenship=$request->hfathercitizenship;
                $data->hmothername=$request->hmothername;
                $data->hmothercitizenship=$request->hmothercitizenship;
                $data->hwitness=$request->hwitness;
                $data->hwitnessrelationship=$request->hwitnessrelationship;
                $data->hwitnessresidence=$request->hwitnessresidence;
                $data->wwifename=$request->wwifename;
                $data->wbirthdate=$request->wbirthdate;
                $data->wage=$request->wage;
                $data->wbirthplace=$request->wbirthplace;
                $data->wcitizenship=$request->wcitizenship;
                $data->wwiferesidence=$request->wwiferesidence;
                $data->wreligion=$request->wreligion;
                $data->wcivilstatus=$request->wcivilstatus;
                $data->wfathername=$request->wfathername;
                $data->wfathercitizenship=$request->wfathercitizenship;
                $data->wmothername=$request->wmothername;
                $data->wmothercitizenship=$request->wmothercitizenship;
                $data->wwitness=$request->wwitness;
                $data->wwitnessrelationship=$request->wwitnessrelationship;
                $data->wwitnessresidence=$request->wwitnessresidence;
                $data->marriagecontractdate=$request->marriagecontractdate;
                $data->minister=$request->minister;
                $data->save();

                //return success message
                return redirect('marriage_info/create')->with('msg','Data has been submitted');
            }
            //validating age error: redirect to create with an error message.
            else
            {
                //return error message
                return redirect()->back()->withInput()->with('error','Age do not match birth date');
            }
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Marriage::find($id);


        return view('certificate_marriage.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Marriage::find($id);
        return view('certificate_marriage.edit',['data'=>$data]);
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
            'hhusbandname'=>'required',
            'hbirthdate'=>'required|date',
            'hage'=>'required|integer',
            'hbirthplace'=>'required',
            'hcitizenship'=>'required',
            'hhusbandresidence'=>'required',
            'hreligion'=>'required',
            'hcivilstatus'=>'required',
            'hfathername'=>'required',
            'hfathercitizenship'=>'required',
            'hmothername'=>'required',
            'hmothercitizenship'=>'required',
            'hwitness'=>'required',
            'hwitnessrelationship'=>'required',
            'hwitnessresidence'=>'required',
            'wwifename'=>'required',
            'wbirthdate'=>'required|date',
            'wage'=>'required|integer',
            'wbirthplace'=>'required',
            'wcitizenship'=>'required',
            'wwiferesidence'=>'required',
            'wreligion'=>'required',
            'wcivilstatus'=>'required',
            'wfathername'=>'required',
            'wfathercitizenship'=>'required',
            'wmothername'=>'required',
            'wmothercitizenship'=>'required',
            'wwitness'=>'required',
            'wwitnessrelationship'=>'required',
            'wwitnessresidence'=>'required',
            'marriagecontractdate'=>'required|date',
            'minister'=>'required'
        ]);

        $current_date=Carbon::now();
        $hbirthdate=new Carbon(request('hbirthdate'));
        $hage=$current_date->year - $hbirthdate->year;

        $wbirthdate=new Carbon(request('wbirthdate'));
        $wage=$current_date->year - $wbirthdate->year;

            if  ((request('hage')==$hage) && (request('wage')==$wage))
            {
                $data=Marriage::find($id);
                $data->hhusbandname=$request->hhusbandname;
                $data->hbirthdate=$request->hbirthdate;
                $data->hage=$request->hage;
                $data->hbirthplace=$request->hbirthplace;
                $data->hcitizenship=$request->hcitizenship;
                $data->hhusbandresidence=$request->hhusbandresidence;
                $data->hreligion=$request->hreligion;
                $data->hcivilstatus=$request->hcivilstatus;
                $data->hfathername=$request->hfathername;
                $data->hfathercitizenship=$request->hfathercitizenship;
                $data->hmothername=$request->hmothername;
                $data->hmothercitizenship=$request->hmothercitizenship;
                $data->hwitness=$request->hwitness;
                $data->hwitnessrelationship=$request->hwitnessrelationship;
                $data->hwitnessresidence=$request->hwitnessresidence;
                $data->wwifename=$request->wwifename;
                $data->wbirthdate=$request->wbirthdate;
                $data->wage=$request->wage;
                $data->wbirthplace=$request->wbirthplace;
                $data->wcitizenship=$request->wcitizenship;
                $data->wwiferesidence=$request->wwiferesidence;
                $data->wreligion=$request->wreligion;
                $data->wcivilstatus=$request->wcivilstatus;
                $data->wfathername=$request->wfathername;
                $data->wfathercitizenship=$request->wfathercitizenship;
                $data->wmothername=$request->wmothername;
                $data->wmothercitizenship=$request->wmothercitizenship;
                $data->wwitness=$request->wwitness;
                $data->wwitnessrelationship=$request->wwitnessrelationship;
                $data->wwitnessresidence=$request->wwitnessresidence;
                $data->marriagecontractdate=$request->marriagecontractdate;
                $data->minister=$request->minister;
                $data->save();

                //return success message
                return redirect('marriage_info/'.$id.'/edit')->with('msg','Data has been updated');
            }
            //validating age error: redirect to create with an error message.
            else
            {
                //return error message
                return redirect()->back()->withInput()->with('error','Age do not match birth date');
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Marriage::where('id',$id)->delete();
        return redirect('marriage_info');
    }

}
 