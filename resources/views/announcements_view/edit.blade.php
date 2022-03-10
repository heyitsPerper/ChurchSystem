@extends('layouts.master')
@section('title','Update Announcement')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <i class="fas fa-table me-1"></i>
                Update Announcement
            <a onclick="return confirm('Are you sure to leave this page? - Data you have entered may not be saved.')" href="{{url('announcements')}}" class="float-right btn btn-sm btn-info">Go Back</a>
        </div>
        <div class="card-body">
            @if(Session::has('msg'))
                <div class="alert alert-success">
                    {{session('msg')}}
                </div>
            @endif

            <form method="post" action="{{url('announcements/'.$data->id)}}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <table class="table table-bordered">
                    <tr>
                        <th>Title</th>
                        <td>
                            <input type="text" value="{{$data->title}}" name="title" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>
                            <input type="text" value="{{$data->description}}" name="description" class="form-control"  required>
                        </td>
                    </tr>
                    <tr>
                        <th>Location</th>
                        <td>
                            <input type="text" value="{{$data->location}}" name="location" class="form-control"  required>
                        </td>
                    </tr>
                    <tr>
                        <th>Purok</th>
                        <td>
                            <select name="purok" id="purok" class="form-control">
                                <option value="" selected disabled>Select Purok</option>
                                @foreach ($puroks as $purok)
                                    @if ($purok == $data->purok)
                                        <option value="{{$purok}}" selected>{{Illuminate\Support\Str::title($purok)}}</option>
                                    @else
                                        <option value="{{$purok}}">{{Illuminate\Support\Str::title($purok)}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Time</th>
                        <td>
                            <input type="time" value="{{$data->time}}" name="time" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td>
                            <input type="date" value="{{$data->date->format('Y-m-d')}}" name="date" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" class="btn btn-primary btn-block" value="Submit" />
                        </td>
                </table>
            </form>
        </div>
    </div>
</div>
@endsection
