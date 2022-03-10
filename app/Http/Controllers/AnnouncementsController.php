<?php

namespace App\Http\Controllers;

use App\Helpers\PurokHelper;
use App\Http\Controllers\Controller;
use App\Jobs\SendSms;
use Illuminate\Http\Request;
use App\Models\Announcements;
use App\Models\Consumer;
use Carbon\Carbon;
use Nexmo\Laravel\Facade\Nexmo;

class AnnouncementsController extends Controller
{
    //search date
    public function search(Request $request)
    {
        if (isset($_GET['query'])) {
            //getting the current date
            $current_date = Carbon::now();

            //getting date from db
            $date = new Carbon(request('date'));

            //counting date which is equal or greater than the current date
            $activecountgt = Announcements::whereDate('date', '>',   $current_date)->count();
            $activecounte = Announcements::whereDate('date', '=',   $current_date)->count();
            $activecount =  $activecountgt +  $activecounte;

            //counting date which is lesser than the current date
            $deactivecount = Announcements::whereDate('date', '<',   $current_date)->count();

            //count all the rows in the database
            $totalcount = Announcements::count();
            $search_text = $_GET['query'];
            $date = Announcements::where('date', 'LIKE', '%' . $search_text . '%')->paginate(5);
            return view('announcements_view.index', ['date' => $date], compact('totalcount', 'activecount', 'deactivecount'));
        } else {
            return view('announcements_view.index');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //getting the current date
        $current_date = Carbon::now();

        //getting date from db
        $date = new Carbon(request('date'));

        //counting date which is equal or greater than the current date
        $activecountgt = Announcements::whereDate('date', '>',   $current_date)->count();
        $activecounte = Announcements::whereDate('date', '=',   $current_date)->count();
        $activecount =  $activecountgt +  $activecounte;

        //counting date which is lesser than the current date
        $deactivecount = Announcements::whereDate('date', '<',   $current_date)->count();

        //count all the rows in the database
        $totalcount = Announcements::count();

        //get all data
        $data = Announcements::orderBy('date', 'desc')->paginate(5);
        return view('announcements_view.index', ['data' => $data], compact('totalcount', 'activecount', 'deactivecount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $puroks = PurokHelper::getPurok();
        return view('announcements_view.create', ['puroks' => $puroks]);
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
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'time' => 'required',
            'date' => 'required',
            'purok' => 'required',
        ]);

        $data = new Announcements();
        $data->title = $request->title;
        $data->description = $request->description;
        $data->location = $request->location;
        $data->time = $request->time;
        $data->date = $request->date;
        $data->purok = $request->purok;
        $data->save();

        SendSms::dispatch($data);

        return redirect('announcements/create')->with('msg', 'Data has been submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Announcements::find($id);
        return view('announcements_view.show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Announcements::find($id);
        $puroks = PurokHelper::getPurok();
        return view('announcements_view.edit', ['data' => $data, 'puroks' => $puroks]);
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
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'purok' => 'required',
            'time' => 'required',
            'date' => 'required'
        ]);


        $data = Announcements::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->location = $request->location;
        $data->time = $request->time;
        $data->date = $request->date;
        $data->purok = $request->purok;
        $data->save();

        return redirect('announcements/' . $id . '/edit')->with('msg', 'Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Announcements::where('id', $id)->delete();
        return redirect('announcements');
    }
}
