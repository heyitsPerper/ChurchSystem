@extends('consumer.layout.authenticated')

@section('content')
<div class="mt-4 mb-4">

    <div class="row justify-content-center m-2 m-md-0">
        <div class="col-md-6 card rounded p-4 shadow">
            @if (Session::get('success'))
                <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div>
                        {{Session::get('success')}}
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <h5 class="text-center">Profile Account</h5>

            <form action="{{route('consumer.profile_update')}}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="firstname">Firstname</label>
                        <input type="text" name="firstname" id="firstname" class="form-control" value="{{old('firstname') ?? auth()->guard('consumer')->user()->firstname}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lastname">Lastname</label>
                        <input type="text" name="lastname" id="lastname" class="form-control" value="{{old('lastname') ?? auth()->guard('consumer')->user()->lastname}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="purok">Purok</label>
                    <input type="text" name="purok" id="purok" class="form-control" value="{{old('purok') ?? auth()->guard('consumer')->user()->prettyPurok()}}" readonly>
                </div>
                <div class="form-group">
                    <label for="contact_number">Contact Number</label>
                    <input type="text" name="contact_number" id="contact_number" class="form-control" value="{{old('contact_number') ?? auth()->guard('consumer')->user()->contact_number}}">
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="text" name="email" id="email" class="form-control" value="{{old('email') ?? auth()->guard('consumer')->user()->email}}">
                </div>
                <div class="form-group">
                    <label for="old_password">Old Password</label>
                    <input type="password" name="old_password" id="old_password" class="form-control" value="{{old('old_password')}}">
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="password">New Password</label>
                        <input type="password" name="password" id="password" class="form-control" value="{{old('password')}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password_confirmation">Confirm New Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" value="{{old('password_confirmation')}}">
                    </div>
                </div>


                <button type="submit" class="btn btn-success mt-3">Save</button>
            </form>
        </div>
    </div>
@endsection
