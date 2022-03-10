@extends('layouts.master')
@section('title','Total Collections Details')
@section('content')
<h1 class="h3 mb-0 text-gray-800" style="text-align:center">Total Collections Details</h1>
    <br>
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header py-3"> 
                    <a href="{{url('church_officials/create')}}" class="float-right btn btn-sm btn-primary shadow-sm">
                        <i class="fas fa-plus fa-sm text-white-50"></i> Add New</a>
                    <a href="{{url('church_officials')}}" style="margin-right: 10px;" class="float-right btn btn-sm btn-info shadow-sm">
                        <i class="fas fa-eye fa-sm text-white-50"></i> Show All</a>
                </div>  
                <div class="card-body table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr class="table-active">
                                <th>Church First Collections</th>
                                <th>Church Second Collections</th> 
                                <th>Chapel Collections</th> 
                            </tr>
                        </thead> 
                        <tbody>
                        <tr> 
                            @if($data)
                                @foreach($data as $d)
                                  
                                        <td>{{$d->first_collection}}</td>
                                        <td>{{$d->second_collection}}</td>
                                        <td>{{$d->second_collection}}</td>
                                    
                                @endforeach
                            @endif
                            @if($data)
                                @foreach($data as $d)
                                  
                                        <td>{{$d->first_collection}}</td>
                                        <td>{{$d->second_collection}}</td>
                                        <td>{{$d->second_collection}}</td>
                                    
                                @endforeach
                            @endif
                            </tr>
                        </tbody>
                    </table>
                </div>    
            </div>
        </div>
@endsection