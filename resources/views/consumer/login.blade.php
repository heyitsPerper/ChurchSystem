@extends('consumer.layout.consumer_layout')

@section('content')
<link rel="stylesheet" href="{{ asset('css/registration.css')}}">
<div class="title">Login</div>
    <div class="content">
        <form action="{{route('consumer.login')}}" method="POST">
            @csrf
            <div class="pt-4">
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" class="form-control" placeholder="Enter your email" name="email" value="{{old('email')}}" required>
                    @error('email')
                        <div>
                            <span style="font-size: 15px" class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" class="form-control" placeholder="Enter your password" name="password" required>

                </div>
            </div>
            <div class="button">
                <button type="submit">Login</button>
            </div>

            <p class="text-center">Don't have account? <a href="{{route('consumer.signup')}}">Register</a></p>
        </form>
    </div>
@endsection
