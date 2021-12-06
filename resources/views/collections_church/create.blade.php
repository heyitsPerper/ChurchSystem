@extends('layouts.master')
@section('title','Add Church Collection')
@section('content') 
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <i class="fas fa-plus me-1"></i>
            Add Church Collection
            <a onclick="return confirm('Are you sure to leave this page? - Data you have entered may not be saved.')" href="{{url('church_collections')}}" class="float-right btn btn-sm btn-info">Go Back</a>
        </div>
        <div class="card-body">
            @if(Session::has('msg'))
                <div class="alert alert-success">
                    {{session('msg')}}
                </div>
            @endif

            <form method="post" action="{{url('church_collections')}}">
            @csrf
                <table class="table table-hover">
                    <tr>
                        <th>Date</th>
                        <td>
                            <input type="date" name="date" class="form-control" value="{{ (old('date')) }}" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Type of Celebration</th>
                        <td>
                            <input type="text" name="celebration_type" class="form-control" value="{{ (old('celebration_type')) }}" required>
                        </td>
                    </tr>
                    <tr> 
                        <th>Time</th>
                        <td>
                            <input type="time" name="time" class="form-control" value="{{ (old('time')) }}" required>
                        </td>
                    </tr>
                    <tr>
                        <th>1st Collection</th>
                        <td>
                            <input type="number" name="first_collection" class="form-control" value="{{ (old('first_collection')) }}" required>
                        </td>
                    </tr>
                    <tr>
                        <th>2nd Collection</th>
                        <td>
                            <input type="number" name="second_collection" class="form-control" value="{{ (old('second_collection')) }}" required>
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