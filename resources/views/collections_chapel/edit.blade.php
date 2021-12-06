@extends('layouts.master')
@section('title','Update Chapel Collection')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <i class="fas fa-table me-1"></i>
                Update Chapel Collection
            <a onclick="return confirm('Are you sure to leave this page? - Data you have entered may not be saved.')" href="{{url('chapel_collections')}}" class="float-right btn btn-sm btn-info">Go Back</a>
        </div>
        <div class="card-body">
            @if(Session::has('msg'))
                <div class="alert alert-success">
                    {{session('msg')}}
                </div>
            @endif

            <form method="post" action="{{url('chapel_collections/'.$data->id)}}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <table class="table table-hover">
                    <tr>
                        <th>Date</th>
                        <td>
                            <input type="date" value="{{$data->date}}" name="date" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Time</th>
                        <td>
                            <input type="time" value="{{$data->time}}" name="time" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <th>place</th>
                        <td>
                            <input type="text" value="{{$data->place}}" name="place" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Type of Celebration</th>
                        <td>
                            <input type="text" value="{{$data->celebration_type}}" name="celebration_type" class="form-control" required>
                        </td>
                    </tr>
                        <th>1st Collection</th>
                        <td>
                            <input type="number" value="{{$data->first_collection}}" name="first_collection" class="form-control" required>
                        </td>
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