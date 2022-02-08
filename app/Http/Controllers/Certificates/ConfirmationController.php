<?php

namespace App\Http\Controllers\Certificates;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Confirmation;
use Carbon\Carbon;

class ConfirmationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //search child's name
    public function search(Request $request)
    {
        $pendings = Confirmation::where('status', 'pending')->count();
        if (isset($_GET['query'])) {
            $search_text = $_GET['query'];
            $child_name = Confirmation::where('child_name', 'LIKE', '%' . $search_text . '%')->paginate(5);
            return view('certificate_confirmation.index', ['child_name' => $child_name, 'pendings' => $pendings]);
        } else {
            return view('certificate_confirmation.index', ['pendings' => $pendings]);
        }
    }

    public function filterByPending(Request $request)
    {
        $request->validate([
            'status' => 'required'
        ]);


        $confirmation = Confirmation::where('status', $request->status)->paginate(10);
        $pendings = Confirmation::where('status', 'printing')->count();
        return view('certificate_confirmation.index', ['child_name' => $confirmation, 'pendings' => $pendings]);
    }

    public function acceptPending(Confirmation $confirmation)
    {
        $confirmation->status = 'done';
        $confirmation->update();
        return redirect()->back();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Confirmation::where('status', 'done')->orderBy('id', 'asc')->paginate(5);
        $pendings = Confirmation::where('status', 'printing')->count();
        return view('certificate_confirmation.index', ['data' => $data, 'pendings' => $pendings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('certificate_confirmation.create');
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
            'child_name' => 'required',
            'baptism_date' => 'required',
            'baptism_place' => 'required',
            'mother_name' => 'required',
            'father_name' => 'required',
            'address' => 'required',
            'confirmation_date' => 'required',
            'minister' => 'required',
            'sponsors' => 'required'
        ]);

        $data = new Confirmation();
        $data->child_name = $request->child_name;
        $data->baptism_date = $request->baptism_date;
        $data->baptism_place = $request->baptism_place;
        $data->mother_name = $request->mother_name;
        $data->father_name = $request->father_name;
        $data->address = $request->address;
        $data->confirmation_date = $request->confirmation_date;
        $data->minister = $request->minister;
        $data->sponsors = $request->sponsors;
        $data->save();

        return redirect('confirmation_info/create')->with('msg', 'Data has been submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Confirmation::find($id);
        return view('certificate_confirmation.show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Confirmation::find($id);
        return view('certificate_confirmation.edit', ['data' => $data]);
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
            'child_name' => 'required',
            'baptismdate' => 'required',
            'baptismplace' => 'required',
            'mother_name' => 'required',
            'father_name' => 'required',
            'address' => 'required',
            'confirmationdate' => 'required',
            'minister' => 'required',
            'sponsors' => 'required'
        ]);

        $data = Confirmation::find($id);
        $data->child_name = $request->child_name;
        $data->baptismdate = $request->baptismdate;
        $data->baptismplace = $request->baptismplace;
        $data->mother_name = $request->mother_name;
        $data->father_name = $request->father_name;
        $data->address = $request->address;
        $data->confirmationdate = $request->confirmationdate;
        $data->minister = $request->minister;
        $data->sponsors = $request->sponsors;
        $data->save();

        return redirect('confirmation_info/' . $id . '/edit')->with('msg', 'Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Confirmation::where('id', $id)->delete();
        return redirect('confirmation_info');
    }

    public function printView(Confirmation $confirmation)
    {
        return view('certificate_confirmation.print', ['confirmation' => $confirmation, 'date' => Carbon::createFromFormat('Y-m-d', $confirmation->confirmation_date)->toFormattedDateString()]);
    }
}
