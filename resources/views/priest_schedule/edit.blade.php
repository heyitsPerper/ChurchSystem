@extends('layouts.master')
@section('title','Update Schedule')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <i class="fas fa-table me-1"></i>
                Update Schedule
            <a onclick="return confirm('Are you sure to leave this page? - Data you have entered may not be saved.')" href="{{url('priest_sched')}}" class="float-right btn btn-sm btn-info">Go Back</a>
        </div>
        <div class="card-body">
            @if(Session::has('msg'))
                <div class="alert alert-success">
                    {{session('msg')}}
                </div>
            @endif

            <form method="post" action="{{url('priest_sched/'.$data->id)}}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <table class="table table-bordered">
                <tr>
                        <th>Date</th>
                        <td>
                        <input type="date" value="{{$data->date}}" name="date" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Time In</th>
                        <td>
                            <input type="time" value="{{$data->time_in}}" name="time_in" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Time Out</th>
                        <td>
                            <input type="time" value="{{$data->time_out}}" name="time_out" class="form-control" required>
                        </td>
                    </tr> 
                    <tr>
                        <th>Activity</th>
                        <td>
                            <input type="text" value="{{$data->activities}}" name="activities" class="form-control" required>
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