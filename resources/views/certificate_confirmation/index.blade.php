@extends('layouts.master')
@section('title','All Confirmation Information')
@section('content')
<h1 class="h3 mb-0 text-gray-800" style="text-align:center">All Confirmation Information</h1>
    <br>
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <form action="{{ route ('confirmation.search')}}" method="GET" class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group" >
                            <input type="text" name="query" placeholder="Search child's name here..." class="form-control bg-light border-0 small" style="width: 17rem;, font-size: 0.85rem;, height: auto;">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-sm btn-primary shadow-sm">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                            <a href="{{url('confirmation_info/create')}}" class="float-right btn btn-sm btn-primary shadow-sm">
                                <i class="fas fa-plus fa-sm text-white-50"></i> Add New</a>
                            <a href="{{url('confirmation_info')}}" style="margin-right: 10px;" class="float-right btn btn-sm btn-info shadow-sm">
                                <i class="fas fa-eye fa-sm text-white-50"></i> Show All</a>
                            <a href="{{route('confirmation.pending', ['status' => 'printing'])}}"  style="margin-right: 10px;" class="float-right btn btn-sm btn-primary shadow-sm">
                                <i class="fa-sm text-white-50"></i>To be print
                                <span class="bg-danger badge">
                                    {{$pendings}}
                                  </span>
                            </a>
                </div>

                <div class="card-body table-responsive">
                    <!-- Display specific informations depende kung unsay gisearch -->
                    @if(isset($child_name))
                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr class="table-active">
                                    <th>Name of Child</th>
                                    <th>Date of Baptism</th>
                                    <th>Name of Mother</th>
                                    <th>Name of Father</th>
                                    <th>Date Confirmed</th>
                                    <th width="21%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($child_name)>0)
                                    @foreach($child_name as $d)
                                        <tr>
                                            <td> {{$d->child_name}}</td>
                                            <td> {{$d->baptism_date}}</td>
                                            <td> {{$d->mother_name}}</td>
                                            <td> {{$d->father_name}}</td>
                                            <td> {{$d->confirmation_date}}</td>
                                            <td>
                                                <div class="d-flex">
                                                    @if ($d->status == 'printing')
                                                    <form action="{{route('confirmation.accept', ['confirmation' => $d])}}" method="post">
                                                        @method('PUT')
                                                        @csrf
                                                        <button type="submit" class="btn btn-success btn-sm">Done</button>
                                                    </form>
                                                    <a href="{{route('confirmation.printView', ['confirmation' => $d])}}" class="btn btn-secondary btn-sm">Print</a>
                                                    @endif

                                                    <a href="{{url('confirmation_info/'.$d->id)}}" class="btn btn-warning btn-sm">Show</a>
                                                    <a href="{{url('confirmation_info/'.$d->id.'/edit')}}" class="btn btn-info btn-sm">Update</a>
                                                    <a onclick="return confirm('Are you sure to delete this data?')" href="{{url('confirmation_info/'.$d->id.'/delete')}}" class="btn btn-danger btn-sm">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <div class="alert alert-warning">
                                        No result found!
                                    </div>
                                @endif
                            </tbody>
                        </table>
                        <div class="float-right pagination-block">
                            {{ $child_name->links() }}
                        </div>
                    <!-- Display all informations -->
                    @else
                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr class="table-active">
                                    <th>Name of Child</th>
                                    <th>Date of Baptism</th>
                                    <th>Name of Mother</th>
                                    <th>Name of Father</th>
                                    <th>Date Confirmed</th>
                                    <th width="21%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($data)
                                    @foreach($data as $d)
                                        <tr>
                                        <td> {{$d->child_name}}</td>
                                            <td> {{$d->baptism_date}}</td>
                                            <td> {{$d->mother_name}}</td>
                                            <td> {{$d->father_name}}</td>
                                            <td> {{$d->confirmation_date}}</td>
                                            <td>
                                                @if($d->status == 'done')
                                                        <a href="{{route('confirmation.printView', ['confirmation' => $d])}}" class="btn btn-success btn-sm">Print</a>
                                                @endif

                                                <a href="{{url('confirmation_info/'.$d->id)}}" class="btn btn-warning btn-sm">Show</a>
                                                <a href="{{url('confirmation_info/'.$d->id.'/edit')}}" class="btn btn-info btn-sm">Update</a>
                                                <a onclick="return confirm('Are you sure to delete this data?')" href="{{url('confirmation_info/'.$d->id.'/delete')}}" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                        <div class="float-right pagination-block">
                            {{ $data->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
@endsection
