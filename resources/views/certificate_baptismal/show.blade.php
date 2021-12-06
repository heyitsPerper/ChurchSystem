@extends('layouts.master')
@section('title','Baptismal Information')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <i class="fas fa-table me-1"></i>
                Baptismal Information
            <a href="{{url('baptismal_info')}}" class="float-right btn btn-sm btn-info">Go Back</a>
        </div>
        <div class="card-body">
            <table class="table table-hover table-bordered">
                <tr>
                    <th>Name of Child</th>
                    <td>
                        {{$data->child_name}}
                    </td>
                </tr>
                <tr>
                    <th>Date of Birth</th>  
                    <td>
                        {{$data->birth_date}}

                    </td>
                </tr>
                <tr>   
                    <th>Place of Birth</th>
                    <td>
                        {{$data->birth_place}}
                    </td>
                </tr>
                <tr>
                    <th>Legitimate or Illegitimate</th>
                    <td>
                        @if($data->legitimate_ill==0) Legitimate @else Illegitimate @endif
                    </td>
                </tr>
                <tr>
                    <th>Name of Mother</th>
                    <td>
                        {{$data->mother_name}}
                    </td>
                </tr>
                <tr>
                    <th>Name of Father</th>
                    <td>
                        {{$data->father_name}}
                    </td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>
                        {{$data->address}}
                    </td>
                </tr>
                <tr>
                    <th>Date of Baptism</th> 
                    <td>
                        {{$data->baptism_date}}
                    </td>
                </tr>
                <tr> 
                    <th>Minister</th>    
                    <td>
                        {{$data->minister}}
                    </td>
                </tr>
                <tr>
                    <th>Sponsors</th> 
                    <td>
                        {{$data->sponsors}}
                    </td>
                </tr>
            </table> 
        </div>
    </div>
</div>
@endsection