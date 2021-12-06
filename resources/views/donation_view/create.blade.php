@extends('layouts.master')
@section('title','Add Donation')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <i class="fas fa-plus me-1"></i>
            Add Donation
            <a onclick="return confirm('Are you sure to leave this page? - Data you have entered may not be saved.')" href="{{url('donations')}}" class="float-right btn btn-sm btn-info">Go Back</a>
        </div>
        <div class="card-body">
            @if(Session::has('msg'))
                <div class="alert alert-success">
                    {{session('msg')}}
                </div>
            @endif

            <form method="post" action="{{url('donations')}}">
                @csrf
                <table class="table table-hover">
                    <tr>
                        <th>Date</th>
                        <td>
                            <input type="date" name="date" class="form-control" value="{{ (old('date')) }}" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Donated By</th  >
                        <td>
                            <input type="text" name="donated_by" class="form-control" value="{{ (old('donated_by')) }}" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Amount</th>
                        <td>
                            <input type="number" name="amount" class="form-control" value="{{ (old('amount')) }}" required>
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