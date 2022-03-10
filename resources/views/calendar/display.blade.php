<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHURCH SYSTEM</title>

    <link href="{{asset('admin/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" >

</head>
<body> 
    <br><br><br><br><br>
            <div class="container">
                <div class="card shadow mb-4">
                    <div class="card-header">
                    <label style="margin-top: 6px" >List of Events</label>
                        <a href="{{url('events')}}" class="float-right btn btn-info">Go Back</a>
                    </div>
                    <br>    
                    <div class="card-body table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Title</th>
                                    <th>Start Date and Time</th>
                                    <th>End Date and Time</th>
                                    <th width="15%">Action</th>
                                </tr>   
                            </thead>
                            @foreach($events as $event)
                            <tbody>
                                <tr>
                                    <td>{{$event->title}}</td>
                                    <td>{{$event->start_date}}</td>
                                    <td>{{$event->end_date}}</td>
                                    <th>
                                        <a href="{{url('events/'.$event->id.'/edit')}}" class="btn btn-info"> Update</a>
                                        <a onclick="return confirm('Are you sure to delete this data?')" href="{{url('events/'.$event->id.'/delete')}}" class="btn btn-danger">Delete</a>
                                    </th>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
</body>
</html>