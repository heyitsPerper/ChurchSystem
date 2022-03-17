@extends('layouts.master')
@section('content')
    <div class=" row justify-content-center ">
        <div class="col-md-8 border">
            <div class="card-header">
                <label style="margin-top: 6px" >Update Data</label>
                <a onclick="return confirm('Are you sure to leave this page? - Data you have entered may not be saved.')" href="{{url('displaydata')}}" class="float-right btn btn-info">Go Back</a>
            </div>

            <div class="card-body">
                <form method="post" class="" action="{{url('events/'.$events->id)}}">
                    @method('put')
                    @csrf
                    <table class="table table-hover">
                        <tr>
                            <th>Name of Event</th>
                            <td>
                                <input type="text" class="form-control" name="title" placeholder="Enter the name of event" value="{{$events->title}}" required>
                            </td>
                        </tr>
                        <tr>
                            <th>Event Color</th>
                            <td>
                                <input type="color" class="form-control" name="color" placeholder="Enter the color" value="{{$events->color}}" required>
                            </td>
                        </tr>
                        <tr>
                            <th>Start Date of Event</th>
                            <td>
                                <input type="datetime-local" class="form-control" name="start_date" class="datetime" placeholder="Enter start date"  value="{{ \Carbon\Carbon::parse($events->start_date)->format('Y-m-d\TH:i')}}" required>
                            </td>
                        </tr>
                        <tr>
                            <th>End Date of Event</th>
                            <td>
                                <input type="datetime-local" class="form-control" name="end_date" class="datetime" placeholder="Enter end date" value="{{ \Carbon\Carbon::parse($events->end_date)->format('Y-m-d\TH:i')}}" required>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" class="btn btn-primary btn-block" value="Update Event Data" />
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
@endsection
