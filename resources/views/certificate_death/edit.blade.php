@extends('layouts.master')
@section('title','Update Death Information')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <i class="fas fa-table me-1"></i>
                Update Death Information
            <a onclick="return confirm('Are you sure to leave this page? - Data you have entered may not be saved.')" href="{{url('death_info')}}" class="float-right btn btn-sm btn-info">Go Back</a>
        </div>
        <div class="card-body">
            @if(Session::has('msg'))
                <div class="alert alert-success">
                    {{session('msg')}}
                </div>
            @endif

            <form method="post" action="{{url('death_info/'.$data->id)}}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <table class="table table-hover">
                    <tr>
                        <th>Deceased Name</th>
                        <td>
                            <input type="text" value="{{$data->deceased_name}}" name="deceased_name" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Date of Death</th>
                        <td>
                            <input type="date" value="{{$data->death_date}}" name="death_date" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Burial Date</th>
                        <td>
                            <input type="date" value="{{$data->burial_date}}" name="burial_date" class="form-control" required>
                        </td>
                    </tr>
                    <tr> 
                        <th>Civil Status</th>
                        <td>
                            <select name="status" class="form-control" required>
                                <option value="">Select Civil Status</option>
                                <option value='Single' {{ $data->status == 'Single' ? 'selected':'' }}> Single </option>
                                <option value='Married' {{ $data->status == 'Married' ? 'selected':'' }}> Married </option>
                                <option value='Widowed' {{ $data->status == 'Widowed' ? 'selected':'' }}> Widowed </option>
                                <option value='Separated' {{ $data->status == 'Separated' ? 'selected':'' }}> Separated </option>
                                <option value='Divorced' {{ $data->status == 'Divorced' ? 'selected':'' }}> Divorced </option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Residence</th>
                        <td>
                            <input type="text" value="{{$data->residence}}" name="residence" class="form-control"  required>
                        </td>
                    </tr>
                    <tr>
                        <th>Sacraments</th>
                        <td>
                            <input type="text" value="{{$data->sacraments}}" name="sacraments" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Cause of Death</th>
                        <td>
                            <input type="text" value="{{$data->death_cause}}" name="death_cause" class="form-control" required>
                        </td>
                    </tr>
                    <tr> 
                        <th>Place of Death</th>
                        <td>
                            <input type="text" value="{{$data->death_place}}" name="death_place" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Minister</th>
                        <td>
                            <input type="text" value="{{$data->minister}}" name="minister" class="form-control" required>
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