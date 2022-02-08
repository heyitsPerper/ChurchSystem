@extends('layouts.master')
@section('title','Announcement')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <i class="fas fa-table me-1"></i>
                Announcement
            <a href="{{url('announcements')}}" class="float-right btn btn-sm btn-info shadow-sm">Go Back</a>
        </div>
        <div class="card-body">
            <table class="table table-hover table-bordered">
                <tr>
                    <th>Title</th>
                    <td>
                        {{$data->title}}
                    </td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>
                        {{$data->description}}
                    </td>
                </tr>
                <tr>
                    <th>Location</th>
                    <td>
                        {{$data->location}}
                    </td>
                </tr>
                <tr>
                    <th>Purok</th>
                    <td>
                        {{$data->purok}}
                    </td>
                </tr>
                <tr>
                    <th>Time</th>
                    <td>
                        {{$data->time}}
                    </td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td>
                        {{$data->date->format('m-d-Y')}}
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
