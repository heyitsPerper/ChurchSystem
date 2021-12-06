<?php

namespace App\Http\Controllers\DonationController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donation;

class Donation_Controller extends Controller
{
   //search celebration date
   public function search(Request $request)  
   {
       if(isset($_GET['query']))
       {
            $search_text = $_GET['query'];
            $date = Donation::where('date', 'LIKE', '%' .$search_text. '%')->paginate(5);
            return view('donation_view.index', ['date'=>$date]);
       }   
       else
       {
            return view('donation_view.index');
       }
   } 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data=Donation::orderBy('id','asc')->paginate(5);
        return view('donation_view.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('donation_view.create');
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
            'donated_by'=>'required',
            'amount'=>'required',
        ]);

        $data=new Donation();
        $data->date=$request->date;
        $data->donated_by=$request->donated_by;
        $data->amount=$request->amount;
        $data->save();

        return redirect('donations/create')->with('msg','Data has been submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Donation::find($id);
        return view('donation_view.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Donation::find($id);
        return view('donation_view.edit',['data'=>$data]);
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
            'donated_by'=>'required',
            'amount'=>'required',
        ]);

        $data=Donation::find($id);
        $data->date=$request->date;
        $data->donated_by=$request->donated_by;
        $data->amount=$request->amount;
        $data->save();

        return redirect('donations/'.$id.'/edit')->with('msg','Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Donation::where('id',$id)->delete();
        return redirect('donations');
    }

}
