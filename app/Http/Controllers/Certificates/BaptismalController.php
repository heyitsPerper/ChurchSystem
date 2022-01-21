<?php

namespace App\Http\Controllers\Certificates;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Baptismal;

class BaptismalController extends Controller
{
   //search child's name
   public function search(Request $request)
   {
       $pendings = Baptismal::where('status', 'pending')->count();

       if(isset($_GET['query']))
       {
           $search_text = $_GET['query'];
           $child_name = Baptismal::where('child_name', 'LIKE', '%' .$search_text. '%')->paginate(2);
            return view('certificate_baptismal.index', ['child_name'=>$child_name, 'pendings' => $pendings]);
       }
       else
       {
            return view('certificate_baptismal.index', ['pendings' => $pendings]);
       }
   }

   // Show only pending baptismal that need to be approve
   public function filterByPending(Request $request)
   {
        $request->validate([
            'status' => 'required'
        ]);


        $baptismal = Baptismal::where('status', 'pending')->paginate(10);
        $pendings = Baptismal::where('status', 'pending')->count();
        return view('certificate_baptismal.index', ['child_name' => $baptismal, 'pendings' => $pendings]);
   }

    public function acceptPending(Baptismal $baptismal)
    {
        $baptismal->status = 'done';
        $baptismal->update();
        return redirect()->back();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //display baptismal info in the table from database
    public function index()
    {
        $data=Baptismal::where('status', 'done')->orderBy('id','asc')->paginate(2);
        $pendings = Baptismal::where('status', 'pending')->count();
        return view('certificate_baptismal.index',['data'=>$data, 'pendings' => $pendings]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //view create baptismal info form
    public function create()
    {
        return view('certificate_baptismal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //store data to database
    public function store(Request $request)
    {
        //validation rules
        $request->validate([
            'child_name'=>'required|string|min:8',
            'birth_date'=>'required|date',
            'birth_place'=>'required|string',
            'legitimate_ill'=>'required',
            'mother_name'=>'required|string|min:8',
            'father_name'=>'required|string|min:8',
            'address'=>'required|string',
            'baptism_date'=>'required|date',
            'minister'=>'required|string|min:8',
            'sponsors'=>'required|string|min:8'
        ]);

            Baptismal::create($request->all());

            return redirect('baptismal_info/create')->with('msg','Data has been submitted');
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Baptismal::find($id);
        return view('certificate_baptismal.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Baptismal::find($id);
        return view('certificate_baptismal.edit',['data'=>$data]);
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
        //validation rules
        $request->validate([
            'child_name'=>'required|string|min:3',
            'birth_date'=>'required|date',
            'birth_place'=>'required|string',
            'legitimate_ill'=>'required',
            'mother_name'=>'required|string|min:3',
            'father_name'=>'required|string|min:3',
            'address'=>'required|string',
            'baptism_date'=>'required|date',
            'minister'=>'required|string|min:3',
            'sponsors'=>'required|string|min:3'
        ]);

        $data=Baptismal::find($id);
        $data->child_name=$request->child_name;
        $data->birth_date=$request->birth_date;
        $data->birth_place=$request->birth_place;
        $data->legitimate_ill=$request->legitimate_ill;
        $data->mother_name=$request->mother_name;
        $data->father_name=$request->father_name;
        $data->address=$request->address;
        $data->baptism_date=$request->baptism_date;
        $data->minister=$request->minister;
        $data->sponsors=$request->sponsors;
        $data->save();

        return redirect('baptismal_info/'.$id.'/edit')->with('msg','Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Baptismal::where('id',$id)->delete();
        return redirect('baptismal_info');
    }

    public function request(Request $request)
    {
        $request->validate([
            'child_name'=>'required|string|min:8',
            'birth_date'=>'required|date',
            'birth_place'=>'required|string',
            'legitimate_ill'=>'required',
            'mother_name'=>'required|string|min:8',
            'father_name'=>'required|string|min:8',
            'address'=>'required|string',
            'baptism_date'=>'required|date',
            'minister'=>'required|string|min:8',
            'sponsors'=>'required|string|min:8'
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
            'sponsors' => $request->sponsors
        ]);


    }
}
