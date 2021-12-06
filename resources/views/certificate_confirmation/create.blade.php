@extends('layouts.master')
@section('title','Add Confirmation Information')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <i class="fas fa-plus me-1"></i>
                Add Confirmation Information
            <a onclick="return confirm('Are you sure to leave this page? - Data you have entered may not be saved.')" href="{{url('confirmation_info')}}" class="float-right btn btn-sm btn-info">Go Back</a>
        </div>
        <div class="card-body">
            @if(Session::has('msg'))
                <div class="alert alert-success">
                    {{session('msg')}}
                </div>
            @endif
            
            <form method="post" action="{{url('confirmation_info')}}">
                @csrf
                <table class="table table-hover">
                    <tr>
                        <th>Name of Child</th>
                        <td>
                            <input type="text" name="child_name" class="form-control" value="{{ (old('child_name')) }}" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Date of Baptism</th>
                        <td>
                            <input type="date" name="baptism_date" class="form-control" value="{{ (old('baptism_date')) }}" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Place of Baptism</th>
                        <td>
                            <input type="text" name="baptism_place" class="form-control" value="{{ (old('baptism_place')) }}" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Name of Mother</th>
                        <td>
                            <input type="text" name="mother_name" class="form-control" value="{{ (old('mother_name')) }}" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Name of Father</th>
                        <td>
                            <input type="text" name="father_name" class="form-control" value="{{ (old('father_name')) }}" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>
                            <input type="text" name="address" class="form-control" value="{{ (old('address')) }}" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Date Confirmed</th>
                        <td>
                            <input type="date" name="confirmation_date" class="form-control" value="{{ (old('confirmation_date')) }}" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Minister</th>
                        <td>
                            <input type="text" name="minister" class="form-control" value="{{ (old('minister')) }}" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Sponsors</th>
                        <td>
                            <input type="text" name="sponsors" class="form-control" value="{{ (old('sponsors')) }}" required>
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