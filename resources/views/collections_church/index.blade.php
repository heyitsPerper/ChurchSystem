@extends('layouts.master')
@section('title','Church Collections')
@section('content')
<h1 class="h3 mb-0 text-gray-800" style="text-align:center">Church Collections</h1>
    <br>
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header py-3"> 
                    <form action="{{ route ('churchcollections.search')}}" method="GET" class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group" >
                            <input type="date" name="query" placeholder="Search date here..." class="form-control bg-light border-0 small" style="width: 17rem;, font-size: 0.85rem;, height: auto;">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-sm btn-primary shadow-sm">
                                    <i class="fas fa-search"></i>
                                </button> 
                                </div>
                        </div>
                    </form>
                        <a href="{{url('church_collections/create')}}" class="float-right btn btn-sm btn-primary shadow-sm">
                            <i class="fas fa-plus fa-sm text-white-50"></i> Add New</a>
                        <a href="{{url('church_collections')}}" style="margin-right: 10px;" class="float-right btn btn-sm btn-info shadow-sm">
                            <i class="fas fa-eye fa-sm text-white-50"></i> Show All</a>
                </div>  
                
                <div class="card-body table-responsive">
                    <!-- Display specific informations depende kung unsay gisearch -->
                    @if(isset($date))
                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr class="table-active">
                                    <th>Date</th>
                                    <th>Type of Celebration</th>
                                    <th>Time</th>
                                    <th>1st Collection</th>
                                    <th>2nd Collection</th>
                                    <th>Total</th>
                                    <th width="15%">Action</th>
                                </tr>
                            </thead> 
                            <tbody>
                                @if(count($date)>0)
                                    @foreach($date as $d)
                                        <tr> 
                                            <td> {{$d->date}}</td>
                                            <td> {{$d->celebration_type}}</td>
                                            <td>{{$d->time}}</td>
                                            <td> {{$d->first_collection}}</td>
                                            <td>{{$d->second_collection}}</td>
                                            <td>{{$d->total}}</td>
                                            <td>
                                                <a href="{{url('church_collections/'.$d->id.'/edit')}}" class="btn btn-info btn-sm">Update</a>
                                                <a onclick="return confirm('Are you sure to delete this data?')" href="{{url('church_collections/'.$d->id.'/delete')}}" class="btn btn-danger btn-sm">Delete</a>
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
                                    <th>Date</th>
                                    <th>Type of Celebration</th>
                                    <th>Time</th>
                                    <th>1st Collection</th>
                                    <th>2nd Collection</th>
                                    <th>Total</th>
                                    <th width="15%">Action</th>
                                </tr> 
                            </thead> 
                            <tbody>
                                @if($data)
                                    @foreach($data as $d)
                                        <tr> 
                                            <td>{{$d->date}}</td>
                                            <td>{{$d->celebration_type}}</td>
                                            <td>{{$d->time}}</td>
                                            <td>{{$d->first_collection}}</td>
                                            <td>{{$d->second_collection}}</td>
                                            <td>{{$d->total}}</td>
                                            <td>
                                                <a href="{{url('church_collections/'.$d->id.'/edit')}}" class="btn btn-info btn-sm">Update</a>
                                                <a onclick="return confirm('Are you sure to delete this data?')" href="{{url('church_collections/'.$d->id.'/delete')}}" class="btn btn-danger btn-sm">Delete</a>
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