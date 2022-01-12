@extends('consumer.layout.authenticated')

@section('content')
<div class="mt-5 m-3">
    <div class="row gap-2 justify-content-center ">
        <div class="col-md-7 card shadow p-3">
            <h5>Church Officers</h5>
            <div class="overflow-auto" style="height: 60vh">
                @forelse ($churchOfficers as $officer)
                    <div class="card m-2 p-3">
                        <div class="d-flex">
                            <h6 class="card-title">{{$officer->official_name}}</h6>
                            <p class="card-text ms-auto" style="font-size: 15px"> <strong>{{$officer->position}}</strong></p>
                        </div>
                        <p class="card-text" style="font-size: 15px">{{$officer->contact_number}}</p>
                    </div>
                @empty
                    No Officer
                @endforelse
            </div>
        </div>
        <div class="col-md-4 card shadow p-3">
            <h5>{{ auth()->guard('consumer')->user()->prettyPurok(0) }} Chapel Officers</h5>
            <div class="overflow-auto" style="height: 60vh">
                @forelse ($chapelOfficers as $officer)
                    <div class="card m-2 p-3">
                        <h6 class="card-title">{{$officer->president_name}}</h6>
                        <p class="card-text" style="font-size: 15px">{{$officer->contact_number}}</p>
                    </div>
                @empty
                    No Officer
                @endforelse
            </div>
        </div>
    </div>

</div>
@endsection
