@extends('layouts.master')
@section('title','All Marriage Information')
@section('content')
<h1 class="h3 mb-0 text-gray-800" style="text-align:center">All Marriage Information</h1>
    <br>
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <form action="{{ route ('marriage.search')}}" method="GET" class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group" >
                            <input type="text" name="query" placeholder="Search husband/wife name here..." class="form-control bg-light border-0 small" style="width: 17rem;, font-size: 0.85rem;, height: auto;">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-sm btn-primary shadow-sm">
                                    <i class="fas fa-search"></i>
                                </button> 
                            </div>
                        </div>
                    </form>  
                            <a href="{{url('marriage_info/create')}}" class="float-right btn btn-sm btn-primary shadow-sm">
                                <i class="fas fa-plus fa-sm text-white-50"></i> Add New</a>
                            <a href="{{url('marriage_info')}}" style="margin-right: 10px;" class="float-right btn btn-sm btn-info shadow-sm">
                                <i class="fas fa-eye fa-sm text-white-50"></i> Show All</a>
                </div>

                <div class="card-body table-responsive">
                    <!-- Display specific informations depende kung unsay gisearch -->
                    @if(isset($hhusbandname, $wwifename))
                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr class="table-active">
                                    <th>Name of Husband</th>
                                    <th>Name of Wife</th>
                                    <th>Marriage Contract Date</th>
                                    <th width="21%">Action</th>
                                </tr>
                            </thead> 
                            <tbody>
                                @if(count($wwifename)>0)
                                    @foreach($wwifename as $d)
                                        <tr> 
                                            <td> {{$d->hhusbandname}}</td>
                                            <td> {{$d->wwifename}}</td>
                                            <td> {{$d->marriagecontractdate}}</td>
                                            <td>
                                                <a href="{{url('marriage_info/'.$d->id)}}" class="btn btn-warning btn-sm">Show</a>
                                                <a href="{{url('marriage_info/'.$d->id.'/edit')}}" class="btn btn-info btn-sm">Update</a>
                                                <a onclick="return confirm('Are you sure to delete this data?')" href="{{url('marriage_info/'.$d->id.'/delete')}}" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @elseif (count($hhusbandname)>0)
                                    @foreach($hhusbandname as $d)
                                            <tr> 
                                                <td> {{$d->hhusbandname}}</td>
                                                <td> {{$d->wwifename}}</td>
                                                <td> {{$d->marriagecontractdate}}</td>
                                                <td>
                                                    <a href="{{url('marriage_info/'.$d->id)}}" class="btn btn-warning btn-sm">Show</a>
                                                    <a href="{{url('marriage_info/'.$d->id.'/edit')}}" class="btn btn-info btn-sm">Update</a>
                                                    <a onclick="return confirm('Are you sure to delete this data?')" href="{{url('marriage_info/'.$d->id.'/delete')}}" class="btn btn-danger btn-sm">Delete</a>
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
                            {{ $hhusbandname->links(), $wwifename->links() }}
                        </div>
                    <!-- Display all informations -->
                    @else
                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr class="table-active">
                                    <th>Name of Husband</th>
                                    <th>Name of Wife</th>
                                    <th>Marriage Contract Date</th>
                                    <th width="21%">Action</th>
                                </tr>
                            </thead> 
                            <tbody>
                                @if($data)
                                    @foreach($data as $d)
                                        <tr> 
                                            <td> {{$d->hhusbandname}}</td>
                                            <td> {{$d->wwifename}}</td>
                                            <td> {{$d->marriagecontractdate}}</td>
                                            <td>
                                                <a href="{{url('marriage_info/'.$d->id)}}" class="btn btn-warning btn-sm">Show</a>
                                                <a href="{{url('marriage_info/'.$d->id.'/edit')}}" class="btn btn-info btn-sm">Update</a>
                                                <a onclick="return confirm('Are you sure to delete this data?')" href="{{url('marriage_info/'.$d->id.'/delete')}}" class="btn btn-danger btn-sm">Delete</a>
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