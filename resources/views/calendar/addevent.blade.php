@extends('layouts.master')
@section('content')
    <div class=" row justify-content-center ">
        <div class="col-md-8 border">
            <div class="card-header">
                <label style="margin-top: 6px" >Add Event to Calendar</label>
                <a onclick="return confirm('Are you sure to leave this page? - Data you have entered may not be saved.')" href="{{url('events')}}" class="float-right btn btn-info">Go Back</a>
            </div>
            <div class="card-body">
                <form method="POST"  action="{{url('events')}}">
                    @csrf
                    <table class="table table-hover">
                        <tr>
                            <th>Name of Event</th>
                            <td>
                                <input type="text" class="form-control" name="title" placeholder="Enter the name of event" value="{{ (old('title')) }}" required>
                            </td>
                        </tr>
                        <tr>
                            <th>Event Color</th>
                            <td>
                                <input type="color" class="form-control" name="color" placeholder="Enter the color" value="{{ (old('color')) }}" required>
                            </td>
                        </tr>
                        <tr>
                            <th>Start Date of Event</th>
                            <td>
                                <input type="datetime-local" class="form-control" name="start_date" class="datetime" placeholder="Enter start date" value="{{ (old('start_date')) }}" required>
                            </td>
                        </tr>
                        <tr>
                            <th>End Date of Event</th>
                            <td>
                                <input type="datetime-local" class="form-control" name="end_date" class="datetime" placeholder="Enter end date" value="{{ (old('end_date')) }}" required>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" class="btn btn-primary btn-block" value="Add Event Data" />
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>

@endsection
