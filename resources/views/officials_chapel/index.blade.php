@extends('layouts.master')
@section('title','Chapel Officials')
@section('content')
<h1 class="h3 mb-0 text-gray-800" style="text-align:center">Chapel Officials</h1>
    <br>
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header py-3"> 
                        <a href="{{url('chapel_officials/create')}}" class="float-right btn btn-sm btn-primary shadow-sm">
                            <i class="fas fa-plus fa-sm text-white-50"></i> Add New</a>
                        <a href="{{url('chapel_officials')}}" style="margin-right: 10px;" class="float-right btn btn-sm btn-info shadow-sm">
                            <i class="fas fa-eye fa-sm text-white-50"></i> Show All</a>
                </div>  
                
                <div class="card-body table-responsive">
                    <!-- Display all informations -->
                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr class="table-active">
                                    <th>Chapel Location</th>
                                    <th>President Name</th> 
                                    <th>Contact Number</th>
                                    <th width="15%">Action</th>
                                </tr>
                            </thead> 
                            <tbody>
                                @if($data)
                                    @foreach($data as $d)
                                        <tr> 
                                            <td>{{$d->chapel_location}}</td>
                                            <td>{{$d->president_name}}</td>
                                            <td>{{$d->contact_number}}</td>
                                            <td>
                                                <a href="{{url('chapel_officials/'.$d->id.'/edit')}}" class="btn btn-info btn-sm">Update</a>
                                                <a onclick="return confirm('Are you sure to delete this data?')" href="{{url('chapel_officials/'.$d->id.'/delete')}}" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                        <div class="float-right pagination-block">
                            {{ $data->links() }}
                        </div>
                </div>    
            </div>
        </div>
@endsection