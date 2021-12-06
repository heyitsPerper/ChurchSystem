@extends('layouts.master')
@section('title','Confirmation Informations')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <i class="fas fa-table me-1"></i>
                Confirmation Information
            <a href="{{url('confirmation_info')}}" class="float-right btn btn-sm btn-info">Go Back</a>
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
                    <th>Date of Baptism</th>  
                    <td>
                        {{$data->baptism_date}}

                    </td>
                </tr>
                <tr>   
                    <th>Place of Baptism</th>
                    <td>
                        {{$data->baptism_place}}
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
                    <th>Date Confirmed</th> 
                    <td>
                        {{$data->confirmation_date}}
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