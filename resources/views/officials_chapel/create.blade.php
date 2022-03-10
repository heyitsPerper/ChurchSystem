@extends('layouts.master')
@section('title','Add New Official')
@section('content') 
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <i class="fas fa-plus me-1"></i>
            Add New Official
            <a onclick="return confirm('Are you sure to leave this page? - Data you have entered may not be saved.')" href="{{url('chapel_officials')}}" class="float-right btn btn-sm btn-info">Go Back</a>
        </div>
        <div class="card-body">
            @if(Session::has('msg'))
                <div class="alert alert-success">
                    {{session('msg')}}
                </div>
            @endif 

            <form method="post" action="{{url('chapel_officials')}}">
            @csrf
                <table class="table table-hover">
                    <tr>
                        <th>Chapel Location</th>
                        <td>
                            <input type="text" name="chapel_location" class="form-control" value="{{ (old('chapel_location')) }}" required> 
                        </td>
                    </tr>
                    <tr>
                        <th>President Name</th>
                        <td>
                            <input type="text" name="president_name" class="form-control" value="{{ (old('president_name')) }}" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Contact Number</th>
                        <td>
                            <input type="number" name="contact_number" class="form-control" value="{{ (old('contact_number')) }}" required>
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