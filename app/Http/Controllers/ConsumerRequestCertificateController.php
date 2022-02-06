<?php

namespace App\Http\Controllers;

use App\Models\Baptismal;
use App\Models\Confirmation;
use Illuminate\Http\Request;

class ConsumerRequestCertificateController extends Controller
{
    public function requestBaptismal(Request $request)
    {
        $request->validate([
            'child_name' => 'required',
            'birth_date' => 'required|date',
            'birth_place' => 'required',
            'legitimate_ill' => 'required',
            'mother_name' => 'required',
            'father_name' => 'required',
            'address' => 'required',
            'baptism_date' => 'required|date',
            'minister' => 'required',
            'sponsors' => 'required'
        ]);

        Baptismal::create([
            'child_name' => $request->child_name,
            'birth_date' => $request->birth_date,
            'birth_place' => $request->birth_place,
            'legitimate_ill' => $request->legitimate_ill,
            'mother_name' => $request->mother_name,
            'father_name' => $request->father_name,
            'address' => $request->address,
            'baptism_date' => $request->baptism_date,
            'minister' => $request->minister,
            'sponsors' => $request->sponsors,
            'status' => 'pending'
        ]);

        return redirect()->back()->with('success', 'Successfully send request for baptismal certificate! Kindly visit the church next week to claim your requested certificate.');
    }

    public function requestConfirmation(Request $request)
    {
        $request->validate([
            'child_name' => 'required',
            'baptism_date' => 'required|date',
            'baptism_place' => 'required',
            'mother_name' => 'required',
            'father_name' => 'required',
            'address' => 'required',
            'confirmation_date' => 'required|date',
            'minister' => 'required',
            'sponsors' => 'required'
        ]);

        Confirmation::create([
            'child_name' => $request->child_name,
            'baptism_date' => $request->baptism_date,
            'baptism_place' => $request->baptism_place,
            'mother_name' => $request->mother_name,
            'father_name' => $request->father_name,
            'address' => $request->address,
            'confirmation_date' => $request->confirmation_date,
            'minister' => $request->minister,
            'sponsors' => $request->sponsors,
            'status' => 'pending'
        ]);
        return redirect()->back()->with('success', 'Successfully send request for confirmation certificate! Kindly visit the church next week to claim your requested certificate.');
    }
}
