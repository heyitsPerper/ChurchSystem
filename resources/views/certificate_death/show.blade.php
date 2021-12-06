@extends('layouts.master')
@section('title','Death Information')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <i class="fas fa-table me-1"></i>
                Death Information
            <a href="{{url('death_info')}}" class="float-right btn btn-sm btn-info">Go Back</a>
        </div>
        <div class="card-body">
            <table class="table table-hover table-bordered">
                    <tr>
                        <th>Deceased Name</th>
                        <td>
                        {{$data->deceased_name}}
                        </td>
                    </tr>
                    <tr>
                        <th>Date of Death</th>
                        <td>
                        {{$data->death_date}}
                        </td>
                    </tr>
                    <tr>
                        <th>Burial Date</th>
                        <td>
                        {{$data->burial_date}}
                        </td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td> 
                        {{$data->status}}
                            <br />
                        </td>
                    </tr>
                    <tr>
                        <th>Residence</th>
                        <td>
                        {{$data->residence}}
                        </td>
                    </tr>
                    <tr>
                        <th>Sacraments</th>
                        <td>
                        {{$data->sacraments}}
                        </td>
                    </tr>
                    <tr>
                        <th>Cause of Death</th>
                        <td>
                        {{$data->death_cause}}
                        </td>
                    </tr>
                    <tr>
                        <th>Place of Death</th>
                        <td>
                        {{$data->death_place}}
                        </td>
                    </tr>
                    <tr>
                        <th>Minister</th>
                        <td>
                        {{$data->minister}}
                        </td>
                    </tr>
            </table> 
        </div>
    </div>
</div>
@endsection