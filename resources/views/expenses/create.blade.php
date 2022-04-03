@extends('layouts.master')
@section('title','Add Church Collection')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <i class="fas fa-plus me-1"></i>
            Add New Expense
            <a onclick="return confirm('Are you sure to leave this page? - Data you have entered may not be saved.')" href="{{route('expense.index')}}" class="float-right btn btn-sm btn-info">Go Back</a>
        </div>
        <div class="card-body">
            @if(Session::has('msg'))
                <div class="alert alert-success">
                    {{session('msg')}}
                </div>
            @endif

            <form method="post" action="{{route('expense.store')}}">
            @csrf
                <table class="table table-hover">
                    <tr>
                        <th>Date</th>
                        <td>
                            <input type="date" name="date" class="form-control" value="{{ (old('date')) }}" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Expense for</th>
                        <td>
                            <input type="text" name="expense_for" class="form-control" value="{{ (old('expense_for')) }}" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Expense Amount</th>
                        <td>
                            <input type="number" name="expense_amount" class="form-control" value="{{ (old('first_collection')) }}" required>
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
