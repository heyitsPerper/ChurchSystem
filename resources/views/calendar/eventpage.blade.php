<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHURCH SYSTEM</title>

    <link href="{{asset('admin/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" >

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
</head>
<body> 
    <h2 style="text-align:center">Church Event Calendar</h2>
        <br> 
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header py-3">
                        <a href="{{url('announcements')}}" class="btn  btn-info shadow-sm">Go Back</a>
                        <a href="/addeventurl" style="margin-right: 10px;" class="float-right btn  btn-success shadow-sm">Add Events</a>
                        <a href="/displaydata" style="margin-right: 10px;" class="float-right btn btn-primary shadow-sm">View Events</a>
                    </div>
                    <div class="card-body">
                        @if(count($errors)>0)
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
                        @endif
                    </div>
                    
                        <div class="container-fluid">
                            <div class="card shadow mb-4">
                                    <div class="panel-heading" style="background:#2e6da4; color:white;">
                                        Event Calendar [Full - Calendar]
                                    </div>
                                    <div class="panel-body">
                                        {!! $calendar->calendar() !!}
                                        {!! $calendar->script() !!}
                                    </div>
                            </div>
                        </div>
                </div>
            </div>
</body>
</html>