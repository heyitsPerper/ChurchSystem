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
            'mother_name' => 'required',
            'father_name' => 'required',
        ]);

        // Baptismal::create([
        //     'child_name' => $request->child_name,
        //     'birth_date' => $request->birth_date,
        //     'birth_place' => $request->birth_place,
        //     'legitimate_ill' => $request->legitimate_ill,
        //     'mother_name' => $request->mother_name,
        //     'father_name' => $request->father_name,
        //     'address' => $request->address,
        //     'baptism_date' => $request->baptism_date,
        //     'minister' => $request->minister,
        //     'sponsors' => $request->sponsors,
        //     'status' => 'pending'
        // ]);

        $result = Baptismal::where('child_name', 'LIKE', "%$request->child_name%")
            ->where('birth_date', $request->birth_date)
            ->where('mother_name', $request->mother_name)
            ->where('father_name', $request->father_name)->first();

        if (!$result) {
            return redirect()->back()->with('message', 'No Information Found')->withInput($request->all());
        }

        $result->status = 'printing';
        $result->save();

        return redirect()->back()->with('message', 'Successfully send request for baptismal certificate! Kindly visit the church next week to claim your requested certificate.');
    }

    public function requestConfirmation(Request $request)
    {
        $request->validate([
            'child_name' => 'required',
            'baptism_date' => 'required|date',
            'mother_name' => 'required',
            'father_name' => 'required',
        ]);

        $result = Confirmation::where('child_name', 'LIKE', "%$request->child_name%")
            ->where('baptism_date', $request->baptism_date)
            ->where('mother_name', $request->mother_name)
            ->where('father_name', $request->father_name)->first();

        if (!$result) {
            return redirect()->back()->with('success', 'No Information Found')->withInput($request->all());
        }

        $result->status = 'printing';
        $result->save();

        return redirect()->back()->with('success', 'Successfully send request for confirmation certificate! Kindly visit the church next week to claim your requested certificate.');
    }
}
