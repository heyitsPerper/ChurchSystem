@extends('layouts.master')
@section('title','Add Church Collection')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <i class="fas fa-plus me-1"></i>
            Generate Income Statement
            <a onclick="return confirm('Are you sure to leave this page? - Data you have entered may not be saved.')" href="{{route('report.index')}}" class="float-right btn btn-sm btn-info">Go Back</a>
        </div>
        <div class="card-body">

            <form method="post" action="{{route('report.statement')}}" target="_blank">
            @csrf
                <table class="table table-hover">
                    <tr>
                        <th>Month</th>
                        <td>
                            <input type="number" name="month_issue" class="form-control" value="{{ (old('month_issue')) }}" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Year</th>
                        <td>
                            <input type="text" name="year_issue" class="form-control" value="{{ (old('year_issue')) }}" required>
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
