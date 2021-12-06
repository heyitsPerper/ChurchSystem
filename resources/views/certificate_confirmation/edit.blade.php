@extends('layouts.master')
@section('title','Update Confirmation Information')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <i class="fas fa-table me-1"></i>
                Update Confirmation Information
            <a onclick="return confirm('Are you sure to leave this page? - Data you have entered may not be saved.')" href="{{url('confirmation_info')}}" class="float-right btn btn-sm btn-info">Go Back</a>
        </div>
        <div class="card-body">
            @if(Session::has('msg'))
                <div class="alert alert-success">
                    {{session('msg')}}
                </div>
            @endif

            <form method="post" action="{{url('confirmation_info/'.$data->id)}}" enctype="multipart/form-data">
            @method('put')
            @csrf
                <table class="table table-hover">
                <tr>
                    <th>Name of Child</th>
                        <td>
                            <input type="text" value="{{$data->child_name}}" name="child_name" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Date of Baptism</th>
                        <td>
                            <input type="date" value="{{$data->baptism_date}}" name="baptism_date" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Place of Baptism</th>
                        <td>
                            <input type="text" value="{{$data->baptism_place}}" name="baptism_place" class="form-control" required>
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
                        <th>Date Confirmed</th>
                        <td>
                            <input type="date" value="{{$data->confirmation_date}}" name="confirmation_date" class="form-control"  required>
                        </td>
                    </tr>
                    <tr> 
                        <th>Minister</th>
                        <td>
                            <input type="text" value="{{$data->minister}}" name="minister" class="form-control"  required>
                        </td>
                    </tr>
                    <tr>
                        <th>Sponsors</th>
                        <td>
                            <input type="text" value="{{$data->sponsors}}" name="sponsors" class="form-control" required>
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