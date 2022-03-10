@extends('consumer.layout.authenticated')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css">
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>

 <input type="hidden" id="scheds" value="{{ $schedules }}">
 <input type="hidden" id="today" value="{{ $today }}">
<div class="mt-4 mb-4 card shadow p-4" id="calendar"></div>

<script>
    function convertIntoCalendarJsFormat(array)
    {
        let sched = [];

        array.forEach(element => {
            sched.push({title: element.activities, start: `${element.date}T${element.time_in}`, end: `${element.date}T${element.time_out}`})
        });
        return sched;
    }

    document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    let schedules = JSON.parse(scheds.value)
    let schedWithFormat = convertIntoCalendarJsFormat(schedules)

    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        initialDate: today.value,
        headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,dayGridWeek'
        },
        events: schedWithFormat
    });

    calendar.render();
});
</script>
@endsection
