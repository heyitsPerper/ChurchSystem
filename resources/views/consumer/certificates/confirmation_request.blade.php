@extends('consumer.layout.authenticated')

@section('content')
<div class="mt-4 mb-4">

    <div class="row justify-content-center m-2 m-md-0">
        <div class="col-md-7 card rounded p-4 ">
            @if (Session::get('success'))
                <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div>
                        {{Session::get('success')}}
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <h5 class="text-center">Confirmation Request Form</h5>
            <form action="{{route('consumer.request_confirmation')}}" method="post">
                @csrf
                <div class="form-group mb-2">
                    <label for="child_name">Child Name</label>
                    <input type="text" name="child_name" id="child_name" value="{{old('child_name')}}" placeholder="John Doe" class="form-control">
                    @error('child_name')
                        <div>
                            <span style="font-size: 15px" class="text-danger">{{$message}}</span>
                        </div>
                    @enderror
                </div>
                <div class="">
                    <div class="form-group">
                        <label for="baptism_date">Baptism Date</label>
                        <input type="date" name="baptism_date" id="baptism_date" value="{{old('baptism_date')}}" class="form-control">
                        @error('baptism_date')
                            <div>
                                <span style="font-size: 15px" class="text-danger">{{$message}}</span>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="form-group col-md-6">
                        <label for="mother_name">Mother Name</label>
                        <input type="text" name="mother_name" id="mother_name" class="form-control" value="{{old('mother_name')}}">
                        @error('mother_name')
                            <div>
                                <span style="font-size: 15px" class="text-danger">{{$message}}</span>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="father_name">Father Name</label>
                        <input type="text" name="father_name" id="father_name" class="form-control" value="{{old('father_name')}}">
                        @error('father_name')
                            <div>
                                <span style="font-size: 15px" class="text-danger">{{$message}}</span>
                            </div>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-1">Send Request</button>
            </form>
        </div>
    </div>
</div>
@endsection
