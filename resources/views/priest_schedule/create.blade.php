@extends('layouts.master')
@section('title','Add Schedule')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <i class="fas fa-plus me-1"></i>
            Add Schedule
            <a onclick="return confirm('Are you sure to leave this page? - Data you have entered may not be saved.')" href="{{url('priest_sched')}}" class="float-right btn btn-sm btn-info">Go Back</a>
        </div>
        <div class="card-body">
            @if(Session::has('msg'))
                <div class="alert alert-success">
                    {{session('msg')}}
                </div>
            @endif

            <form method="post" action="{{url('priest_sched')}}">
                @csrf
                <table class="table table-hover">
                    <tr>
                        <th>Date</th>
                        <td>
                            <input type="date" name="date" class="form-control" value="{{ (old('date')) }}" required> 
                        </td>
                    </tr>
                    <tr>
                        <th>Time In</th>
                        <td>
                            <input type="time" name="time_in" class="form-control" value="{{ (old('time_in')) }}" required> 
                        </td>
                    </tr>
                    <tr>
                        <th>Time Out</th>
                        <td>
                            <input type="time" name="time_out" class="form-control" value="{{ (old('time_out')) }}" required> 
                        </td>
                    </tr>
                    <tr>
                        <th>Activity</th>
                        <td>
                            <input type="text" name="activities" class="form-control" value="{{ (old('activities')) }}" required> 
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