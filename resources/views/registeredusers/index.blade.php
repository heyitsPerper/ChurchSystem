@extends('layouts.master')
@section('title','Registered Users')
@section('content')
<h1 class="h3 mb-0 text-gray-800" style="text-align:center">Registered Users</h1>
    <br>
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <!-- <form action="{{ route ('sched.search')}}" method="GET" class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group" >
                            <input type="date" name="query" class="form-control bg-light border-0 small" style="width: 17rem;, font-size: 0.85rem;, height: auto;">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-sm btn-primary shadow-sm">
                                    <i class="fas fa-search"></i>
                                </button> 
                            </div>
                        </div>
                    </form>   
                            <a href="{{url('priest_sched/create')}}" class="float-right btn btn-sm btn-primary shadow-sm">
                                <i class="fas fa-plus fa-sm text-white-50"></i> Add New</a>
                            <a href="{{url('priest_sched')}}" style="margin-right: 10px;" class="float-right btn btn-sm btn-info shadow-sm">
                                <i class="fas fa-eye fa-sm text-white-50"></i> Show All</a>-->
                </div>

                <div class="card-body table-responsive">
                    <!-- Display specific informations depende kung unsay gisearch -->
                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr class="table-active">
                                    <th>Purok</th>
                                    <th>Name</th>
                                    <th>Contact Number</th>
                                    <th>Email</th>
                                    <!-- <th width="21%">Action</th> -->
                                </tr>
                            </thead> 
                            <tbody>
                                @if($data)
                                    @foreach($data as $d)
                                        <tr>
                                            <td> {{$d->purok}}</td>
                                            <td> {{$d->fullName()}}</td>
                                            <td> {{$d->contact_number}}</td>
                                            <td> {{$d->email}}</td>
                                            <!-- <td>
                                                <a href="{{url('priest_sched/'.$d->id.'/edit')}}" class="btn btn-info btn-sm">Update</a>
                                                <a onclick="return confirm('Are you sure to delete this data?')" href="{{url('priest_sched/'.$d->id.'/delete')}}" class="btn btn-danger btn-sm">Delete</a>
                                            </td> -->
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                </div>    
            </div>
        </div>
@endsection