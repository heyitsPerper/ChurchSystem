@extends('layouts.master')
@section('title','Update Baptismal Information')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <i class="fas fa-table me-1"></i>
                Update Baptismal Information
            <a onclick="return confirm('Are you sure to leave this page? - Data you have entered may not be saved.')" href="{{url('baptismal_info')}}" class="float-right btn btn-sm btn-info">Go Back</a>
        </div>
        <div class="card-body">
            @if(Session::has('msg'))
                <div class="alert alert-success">
                    {{session('msg')}}
                </div>
            @endif

            <form method="post" action="{{url('baptismal_info/'.$data->id)}}" enctype="multipart/form-data">
            @method('put')
            @csrf
                <table class="table table-bordered">
                    <tr>
                        <th>Name of Child</th>
                        <td>
                            <input type="text" value="{{$data->child_name}}" name="child_name" class="form-control" required>

                        </td>
                    </tr> 
                    <tr>
                        <th>Date of Birth</th>
                        <td>
                            <input type="date" value="{{$data->birth_date}}" name="birth_date" class="form-control" required>
    
                        </td>
                    </tr>
                    <tr>
                        <th>Place of Birth</th>
                        <td>
                            <input type="text" value="{{$data->birth_place}}" name="birth_place" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Legitimate or Illegitimate</th>
                        <td>
                            <input @if($data->legitimate_ill==0) checked @endif type="radio" name="legitimate_ill" value="0" /> Legitimate
                            <br />
                            <input @if($data->legitimate_ill==1) checked @endif type="radio" name="legitimate_ill" value="1" /> Illegitimate
                            <br />  
                        </td> 
                    </tr>
                    <tr>
                        <th>Name of Mother</th>
                        <td>
                            <input type="text" value="{{$data->mother_name}}" name="mother_name" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Name of Father</th>
                        <td>
                            <input type="text" value="{{$data->father_name}}" name="father_name" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>
                            <input type="text" value="{{$data->address}}" name="address" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Date of Baptism</th>
                        <td>
                            <input type="date" value="{{$data->baptism_date}}" name="baptism_date" class="form-control" required>
                        </td>
                    </tr>
                    <tr> 
                        <th>Minister</th>
                        <td>
                            <input type="text" value="{{$data->minister}}" name="minister" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Sponsors</th>
                        <td>
                            <input type="text" value="{{$data->sponsors}}" name="sponsors" placeholder="Separate sponsor's name with comma" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" class="btn btn-primary btn-block" value="Submit" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>

@endsection