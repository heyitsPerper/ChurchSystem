@extends('layouts.master')
@section('title','Update Church Official')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <i class="fas fa-table me-1"></i>
                Update Church Official
            <a onclick="return confirm('Are you sure to leave this page? - Data you have entered may not be saved.')" href="{{url('church_officials')}}" class="float-right btn btn-sm btn-info">Go Back</a>
        </div>
        <div class="card-body">
            @if(Session::has('msg'))
                <div class="alert alert-success">
                    {{session('msg')}}
                </div>
            @endif

            <form method="post" action="{{url('church_officials/'.$data->id)}}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <table class="table table-hover">
                    <tr>
                        <th>Position</th>
                        <td>
                            <select name="position" class="form-control" required>
                            <option value="">Select Position</option>
                                <option value='President' {{ $data->position == 'President' ? 'selected':'' }}> President </option>
                                <option value='Vice President' {{ $data->position == 'Vice President' ? 'selected':'' }}> Vice President </option>
                                <option value='Treasurer' {{ $data->position == 'Treasurer' ? 'selected':'' }}> Treasurer </option>
                                <option value='Secretary' {{ $data->position == 'Secretary' ? 'selected':'' }}> Secretary </option>
                                <option value='Auditor' {{ $data->position == 'Auditor' ? 'selected':'' }}> Auditor </option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Official Name</th>
                        <td>
                            <input type="text" value="{{$data->official_name}}" name="official_name" class="form-control"  required>
                        </td>
                    </tr>
                    <tr>
                        <th>Contact Number</th>
                        <td>
                            <input type="number" value="{{$data->contact_number}}" name="contact_number" class="form-control" required>
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