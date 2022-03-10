@extends('layouts.master')
@section('title','Church Officials')
@section('content')
<h1 class="h3 mb-0 text-gray-800" style="text-align:center">Church Officials</h1>
    <br>
        <div class="container-fluid">
            <div class="card shadow mb-4">
                
                <div class="card-body table-responsive">
                    <!-- Display all informations -->
                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr class="table-active">
                                    <th>Position</th>
                                    <th>Official Name</th> 
                                    <th>Contact Number</th>
                                    <th width="8%">Action</th>
                                </tr>
                            </thead> 
                            <tbody>
                                @if($data)
                                    @foreach($data as $d)
                                        <tr> 
                                            <td>{{$d->position}}</td>
                                            <td>{{$d->official_name}}</td>
                                            <td>{{$d->contact_number}}</td>
                                            <td>
                                                <a href="{{url('church_officials/'.$d->id.'/edit')}}" class="btn btn-info btn-sm">Update</a>
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