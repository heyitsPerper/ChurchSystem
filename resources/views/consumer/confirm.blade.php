@extends('consumer.layout.consumer_layout')

@section('content')
<link rel="stylesheet" href="{{ asset('css/registration.css')}}">
<div class="title">Confirm Code</div>
    <div class="content">
        <form action="{{route('consumer.confirm')}}" method="POST">
            @csrf
            <div class="pt-4">
                <div class="input-box">
                    <span class="details">Code</span>
                    <input type="text" class="form-control" placeholder="Enter your code" name="code_confirm" required>
                    @if (isset($error))
                    <div>
                        <span style="font-size: 15px" class="text-danger">{{ $error }}</span>
                    </div>
                    @endif
                </div>
            </div>
            <div class="button">
                <button type="submit">Confirm</button>
                {{-- <input type="submit" value="Register"> --}}
            </div>
        </form>
    </div>
@endsection
