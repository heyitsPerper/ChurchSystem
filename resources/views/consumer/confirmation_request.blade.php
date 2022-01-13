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
                <div class="row mb-2">
                    <div class="form-group col-md-4">
                        <label for="baptism_date">Baptism Date</label>
                        <input type="date" name="baptism_date" id="baptism_date" value="{{old('baptism_date')}}" class="form-control">
                        @error('baptism_date')
                            <div>
                                <span style="font-size: 15px" class="text-danger">{{$message}}</span>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-8">
                        <label for="baptism_place">Baptism Place</label>
                        <input type="text" name="baptism_place" id="baptism_place" value="{{old('baptism_place')}}" class="form-control" >
                        @error('baptism_place')
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
                <div class="form-group mb-2">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" class="form-control" value="{{old('address')}}">
                    @error('address')
                        <div>
                            <span style="font-size: 15px" class="text-danger">{{$message}}</span>
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="confirmation_date">Confirmation Date</label>
                    <input type="date" name="confirmation_date" id="confirmation_date" class="form-control" value="{{old('confirmation_date')}}">
                    @error('confirmation_date')
                        <div>
                            <span style="font-size: 15px" class="text-danger">{{$message}}</span>
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="minister">Minister</label>
                    <input type="text" name="minister" id="minister" class="form-control" value="{{old('minister')}}">
                    @error('minister')
                        <div>
                            <span style="font-size: 15px" class="text-danger">{{$message}}</span>
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="sponsors">Sponsors</label>
                    <textarea name="sponsors" id="sponsors" cols="30" rows="6" class="form-control" placeholder="Separate sponsor's name with comma">{{old('sponsors')}}</textarea>
                    @error('sponsors')
                        <div>
                            <span style="font-size: 15px" class="text-danger">{{$message}}</span>
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mt-1">Send Request</button>
            </form>
        </div>
    </div>
</div>
@endsection
