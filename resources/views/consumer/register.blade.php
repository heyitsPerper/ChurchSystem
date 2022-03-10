@extends('consumer.layout.consumer_layout')

@section('content')
<link rel="stylesheet" href="{{ asset('css/registration.css')}}">
<div class="title">Registration</div>
    <div class="content">

      <form action="{{route('consumer.register')}}" method="POST">
        @csrf
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" placeholder="Enter your firstname" name="firstname" value="{{ old('firstname')}}" >
            @error('firstname')
                <div>
                    <span style="font-size: 15px" class="text-danger">{{$message}}</span>
                </div>
            @enderror
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" placeholder="Enter your lastname" name="lastname" value="{{ old('lastname')}}">
            @error('lastname')
                <div>
                    <span style="font-size: 15px" class="text-danger">{{$message}}</span>
                </div>
            @enderror
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Enter your email" value="{{ old('email')}}">
            @error('email')
                <div>
                    <span style="font-size: 15px" class="text-danger">{{$message}}</span>
                </div>
            @enderror
          </div>
          <div class="input-box">
            <span class="details">Contact Number</span>
            <input type="text" name="contact_number" placeholder="Enter your number" value="{{ old('contact_number')}}">
            @error('contact_number')
                <div>
                    <span style="font-size: 15px" class="text-danger">{{$message}}</span>
                </div>
            @enderror
          </div>
          <div class="input-box">
            <span class="details">Purok</span>
            <select name="purok" class="form-select" style="outline: none;font-size: 16px;border-radius: 5px;padding-left: 15px;border: 1px solid #ccc;border-bottom-width: 2px;transition: all 0.3s ease;" id="purok">
                <option value="" selected disabled>Select Purok</option>
                <option value="purok 1">Purok 1</option>
                <option value="purok 2">Purok 2</option>
                <option value="purok 3">Purok 3</option>
                <option value="purok 4">Purok 4</option>
                <option value="purok 5">Purok 5</option>
                <option value="purok 6">Purok 6</option>
                <option value="purok 7">Purok 7</option>
                <option value="purok 8">Purok 8</option>
                <option value="purok 9">Purok 9</option>
            </select>
            @error('purok')
                <div>
                    <span style="font-size: 15px" class="text-danger">{{$message}}</span>
                </div>
            @enderror
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" placeholder="Enter your password">
            @error('password')
                <div>
                    <span style="font-size: 15px" class="text-danger">{{$message}}</span>
                </div>
            @enderror
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="password_confirmation" placeholder="Confirm your password">
            @error('password_confirmation')
                <div>
                    <span style="font-size: 15px" class="text-danger">{{$message}}</span>
                </div>
            @enderror
          </div>
        </div>
        <div class="button">
            <button type="submit">Register</button>
          {{-- <input type="submit" value="Register"> --}}
        </div>

        <p class="text-center">Already have an account? <a href="{{route('consumer.loginForm')}}">Login</a></p>
      </form>
    </div>
@endsection
