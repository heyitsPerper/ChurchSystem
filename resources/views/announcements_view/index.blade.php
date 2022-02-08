@extends('layouts.master')
@section('title','Announcements')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Announcement Analysis</h1>
    </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Total Announcements-->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Announcements</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalcount }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-bullhorn  fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--  Active Announcements -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Active Announcements</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $activecount }}</div>
                            </div>
                            <div class="col-auto">
                            <i class="fas fa-check-circle fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--  Deactive Announcements -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Deactive Announcements</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $deactivecount }}</div>
                            </div>
                            <div class="col-auto">
                            <i class="far fa-check-circle fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<br>

    <h1 class="h3 mb-0 text-gray-800">List of Announcements</h1>
        <br>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <form action="{{ route ('announcement.search')}}" method="GET" class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group" >
                            <input type="date" name="query" placeholder="Search date here..." class="form-control bg-light border-0 small" style="width: 17rem;, font-size: 0.85rem;, height: auto;">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-sm btn-primary shadow-sm">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                        <a href="{{url('announcements/create')}}" class="float-right btn btn-sm btn-primary shadow-sm">
                            <i class="fas fa-plus fa-sm text-white-50"></i> Add Announcement</a>
                        <a href="{{url('announcements')}}" style="margin-right: 10px;" class="float-right btn btn-sm btn-info shadow-sm">
                            <i class="fas fa-eye fa-sm text-white-50"></i> Show All</a>
                </div>

                <div class="card-body table-responsive">
                    <!-- Display specific informations depende kung unsay gisearch -->
                    @if(isset($date))
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr class="table-active">
                                    <th>Announcement Title</th>
                                    <th>Date</th>
                                    <th width="21%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(count($date)>0)
                                @foreach($date as $d)
                                <tr>
                                    <td> {{$d->title}}</td>
                                    <td> {{$d->date}} {{$d->time}}</td>
                                    <td>
                                        <a href="{{url('announcements/'.$d->id)}}" class="btn btn-warning btn-sm">Show</a>
                                        <a href="{{url('announcements/'.$d->id.'/edit')}}" class="btn btn-info btn-sm">Update</a>
                                        <a onclick="return confirm('Are you sure to delete this data?')" href="{{url('announcements/'.$d->id.'/delete')}}" class="btn btn-danger btn-sm">Delete</a>
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
                            {{ $date->links() }}
                        </div>
                        <!-- Display all informations -->
                    @else
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr class="table-active">
                                    <th>Announcement Title</th>
                                    <th>Date</th>
                                    <th width="21%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if($data)
                                @foreach($data as $d)
                                    <tr>
                                        <td> {{$d->title}}</td>
                                        <td> {{Carbon\Carbon::parse($d->date)->format('m-d-Y')}}</td>
                                        <td>
                                            <a href="{{url('announcements/'.$d->id)}}" class="btn btn-warning btn-sm">Show</a>
                                            <a href="{{url('announcements/'.$d->id.'/edit')}}" class="btn btn-info btn-sm">Update</a>
                                            <a onclick="return confirm('Are you sure to delete this data?')" href="{{url('announcements/'.$d->id.'/delete')}}" class="btn btn-danger btn-sm">Delete</a>
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
@endsection
