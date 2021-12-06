@extends('layouts.master')
@section('title','Add Death Information')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <i class="fas fa-plus me-1"></i>
                Add Death Information
            <a onclick="return confirm('Are you sure to leave this page? - Data you have entered may not be saved.')" href="{{url('death_info')}}" class="float-right btn btn-sm btn-info">Go Back</a>
        </div>
        <div class="card-body">
            @if(Session::has('msg'))
                <div class="alert alert-success">
                    {{session('msg')}}
                </div>
            @endif
            
            <form method="post" action="{{url('death_info')}}">
            @csrf
                <table class="table table-hover">
                    <tr>
                        <th>Deceased Name</th>
                        <td>
                            <input type="text" name="deceased_name" class="form-control" value="{{ (old('deceased_name')) }}" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Date of Death</th>
                        <td>
                            <input type="date" name="death_date" class="form-control" value="{{ (old('death_date')) }}" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Burial Date</th>
                        <td>
                            <input type="date" name="burial_date" class="form-control" value="{{ (old('burial_date')) }}" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Civil Status</th>
                        <td>
                        <select name="status" class="form-control" value="{{ (old('status')) }}" required>
                            <option value="">Select Civil Status</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Widowed">Widowed</option>
                            <option value="Separated">Separated</option>
                            <option value="Divorced">Divorced</option>
                        </select>
                        </td>
                    </tr>
                    <tr> 
                        <th>Residence</th>
                        <td>
                            <input type="text" name="residence" class="form-control" value="{{ (old('residence')) }}" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Sacraments</th>
                        <td>
                            <input type="text" name="sacraments" class="form-control" value="{{ (old('sacraments')) }}" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Cause of Death</th>
                        <td>
                            <input type="text" name="death_cause" class="form-control" value="{{ (old('death_cause')) }}" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Place of Death</th>
                        <td>
                            <input type="text" name="death_place" class="form-control" value="{{ (old('death_place')) }}" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Minister</th>
                        <td>
                            <input type="text" name="minister" class="form-control" value="{{ (old('minister')) }}" required>
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