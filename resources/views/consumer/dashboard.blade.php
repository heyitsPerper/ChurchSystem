@extends('consumer.layout.authenticated')

@section('content')
<div class="mt-5 ">
    <div class="row gap-3 justify-content-center m-2 m-md-0 ">
        <div class="col-md-4 card shadow p-3">
            <h5>Todays Announcement(s)</h5>
            <div class="overflow-auto" style="height: 60vh">
                @forelse ($currentAnnouncements as $announcement)
                    <div class="card m-2 p-3">
                        <div class="d-flex">
                            <h6 class="card-title">{{$announcement->title}}</h6>
                            <p class="card-title ms-auto"> {{ Carbon\Carbon::parse($announcement->time)->format('G:i A') }} </p>
                        </div>
                        <p class="card-text" style="font-size: 15px">{{ $announcement->description }}</p>
                    </div>
                @empty
                    No Announcement
                @endforelse
            </div>
        </div>
        <div class="col-md-7 card shadow p-3">
            <h5>Upcoming Announcement(s)</h5>
            <div class="overflow-auto" style="height: 60vh">
                @forelse ($upcomingAnnouncements as $announcement)
                    <div class=" card m-2 p-3">
                        <div class="d-flex">
                            <h6 class="card-title">{{$announcement->title}}</h6>
                            <div class="d-md-flex gap-2 card-title ms-auto">
                                <p class="card-title">{{$announcement->date->format('m-d-Y')}} </p>
                                <p class="card-title">{{ Carbon\Carbon::parse($announcement->time)->format('G:i A') }}</p>
                            </div>
                        </div>
                        <p class="card-text" style="font-size: 15px">{{ $announcement->description }}</p>
                    </div>
                @empty
                    No Upcoming Announcement
                @endforelse
            </div>
        </div>
    </div>
</div>

@endsection
