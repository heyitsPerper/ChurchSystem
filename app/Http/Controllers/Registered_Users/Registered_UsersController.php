<?php

namespace App\Http\Controllers\Registered_Users;

use App\Helpers\ChildHelper;
use App\Http\Controllers\Controller;
use App\Models\CertificateRequest;
use Illuminate\Http\Request;
use App\Models\Registered_Users;
use App\Models\Consumer;

class Registered_UsersController extends Controller
{
    //search date
    // public function search(Request $request)
    // {
    //     if(isset($_GET['query']))
    //     {
    //          $search_text = $_GET['query'];
    //          $date = Registered_Users::where('purok', 'LIKE', '%' .$search_text. '%')->paginate(5);
    //          return view('priest_schedule.index', ['date'=>$date]);
    //     }
    //     else
    //     {
    //          return view('priest_schedule.index');
    //     }
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Registered_Users::orderBy('purok','asc')->paginate(5);

        return view('registeredusers.index',['data'=>$data]);
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     return view('registeredusers.create');
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'date'=>'required',
    //         'time_in'=>'required',
    //         'time_out'=>'required',
    //         'activities'=>'required'
    //     ]);

    //     $data=new Priest_Sched();
    //     $data->date=$request->date;
    //     $data->time_in=$request->time_in;
    //     $data->time_out=$request->time_out;
    //     $data->activities=$request->activities;
    //     $data->save();

    //     return redirect('priest_sched/create')->with('msg','Data has been submitted');
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     $data=Priest_Sched::find($id);
    //     return view('priest_schedule.edit',['data'=>$data]);

    // }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, $id)
//     {
//        $input = $request->all();

//        $validator = $request->validate([
//              'date'=>'required',
//              'time_in'=>'required',
//              'time_out'=>'required',
//              'activities'=>'required',
//         ]);

//         $data=Priest_Sched::find($id);
//         $data->date=$request->date;
//         $data->time_in=$request->time_in;
//         $data->time_out=$request->time_out;
//         $data->activities=$request->activities;
//         $data->save();

//         return redirect('priest_sched/'.$id.'/edit')->with('msg','Data has been updated');
//     }


//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy($id)
//     {
//         Priest_Sched::where('id',$id)->delete();
//         return redirect('priest_sched');
//     }

}
