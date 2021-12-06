@extends('layouts.master')
@section('title','Update Donation')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <i class="fas fa-table me-1"></i>
            Update Donation
            <a onclick="return confirm('Are you sure to leave this page? - Data you have entered may not be saved.')" href="{{url('donations')}}" class="float-right btn btn-sm btn-info">Go Back</a>
        </div>
        <div class="card-body">
            @if(Session::has('msg'))
                <p class="text-success">{{session('msg')}}</p>
            @endif

            <form method="post" action="{{url('donations/'.$data->id)}}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <table class="table table-bordered">
                    <tr>
                        <th>Date</th>
                        <td>
                            <input type="date" value="{{$data->date}}" name="date" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Donated By</th>
                        <td>
                            <input type="text" value="{{$data->donated_by}}" name="donated_by" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Amount</th>
                        <td>
                            <input type="number" value="{{$data->amount}}" name="amount" class="form-control" required>
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