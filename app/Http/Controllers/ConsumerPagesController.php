<?php

namespace App\Http\Controllers;

use App\Models\ChapelOfficials;
use App\Models\ChurchOfficials;
use App\Models\Priest_Sched;
use Illuminate\Http\Request;

class ConsumerPagesController extends Controller
{
    public function priestSchedule()
    {
        $schedules = Priest_Sched::all();
        $today = now()->format('Y-m-d');
        return view('consumer.priest_schedule',[
            'schedules' => $schedules,
            'today' => $today
        ]);
    }

    public function officers()
    {
        $churchOfficers = ChurchOfficials::all();
        $chapelOfficers = ChapelOfficials::where('chapel_location', auth()->guard('consumer')->user()->purok)->get();
        return view('consumer.officers_list',[
            'churchOfficers' => $churchOfficers,
            'chapelOfficers' => $chapelOfficers
        ]);
    }

    public function requestBaptismalPage()
    {
        return view('consumer.certificates.baptismal_request');
    }

    public function requestConfirmationPage()
    {
        return view('consumer.certificates.confirmation_request');
    }

}
