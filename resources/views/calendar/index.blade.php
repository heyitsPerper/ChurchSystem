@extends('layouts.master')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.5/sweetalert2.css" integrity="sha512-40/Lc5CTd+76RzYwpttkBAJU68jKKQy4mnPI52KKOHwRBsGcvQct9cIqpWT/XGLSsQFAcuty1fIuNgqRoZTiGQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.5/sweetalert2.min.js" integrity="sha512-A8ksFeiC3PRHk+yOR8RT51Oq3zMAxZPUEpOY0FXehFpIvpRSOKnKBwiOLb1CT0m5+cye610mLKDMHiQrgXwSTg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <input type="hidden" id="events" value="{{ $events }}">
    <input type="hidden" id="today" value="{{ $today }}">

        <div class="container-fluid">

                <div class="card">
                    <div class="card-header py-3">
                        <a href="{{url('announcements')}}" class="btn  btn-info shadow-sm">Go Back</a>
                        <a href="/addeventurl" style="margin-right: 10px;" class="float-right btn  btn-success shadow-sm">Add Events</a>
                        <a href="/displaydata" style="margin-right: 10px;" class="float-right btn btn-primary shadow-sm">View Events</a>
                    </div>
                    @if(count($errors)>0)
                        <div class="card-body">
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            @if(\Session::has('success'))
                            <div class="alert alert-success">
                                <p>{{\Session::get('success')}}</p>
                            </div>
                        </div>
                    @endif
            <div class="card shadow p-4" id="calendar"></div>
        </div>
    <script>
        function convertIntoCalendarJsFormat(array)
        {
            let sched = [];

            array.forEach(element => {
                sched.push({title: element.title, start: element.start_date, end: element.end_date, color: element.color})
            });
            return sched;
        }

        function getMonth(month)
        {
            let months = {
                 'Jan' :'01',
                 'Feb' :'02',
                 'Mar' :'03',
                 "Apr" :'04',
                 'May' :'05',
                 'Jun' :'06',
                 'Jul' :'07',
                 'Aug' :'08',
                 'Sep' :'09',
                'Oct':'10',
                'Nov':'11',
                'Dec' : '12'
            }

            return months[month]
        }

        function toReadableDateFormat(date)
        {
            let dateArray = date.split(" ")
            return `${dateArray[2]}/${getMonth(dateArray[1])}/${dateArray[3]}`
        }

        function toReadableTimeFormat(time)
        {
            time = time.split(" ")
            let timeArray = time[4].split(":")


            if(timeArray[0] < 12)
            {
                return `${timeArray[0]}:${timeArray[1]} AM`
            }else{
                return `${timeArray[0] - 12}:${timeArray[1]} PM`
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            let schedules = JSON.parse(events.value)
            let schedWithFormat = convertIntoCalendarJsFormat(schedules)
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                initialDate: today.value,
                headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,dayGridWeek'
                },
                events: schedWithFormat,
                eventClick: function(info){
                    var eventObj = info.event;
                    let text = eventObj.start.toString()
                    toReadableTimeFormat(text)

                    Swal.fire({
                        title: eventObj.title,
                        html: `
                            Event Start <input type="text" value="${toReadableDateFormat(eventObj.start.toString())} - ${toReadableTimeFormat(eventObj.start.toString())}" class="form-control text-center" readonly>
                            Event End <input type="text" value="${toReadableDateFormat(eventObj.end.toString())} - ${toReadableTimeFormat(eventObj.end.toString())}" class="form-control text-center" readonly>
                        `
                    })
                }
            });

            calendar.render();
        })
    </script>

@endsection
