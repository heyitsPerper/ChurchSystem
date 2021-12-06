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
    <br><br><br><br><br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <label style="margin-top: 6px" >Add Event to Calendar</label>
                        <a onclick="return confirm('Are you sure to leave this page? - Data you have entered may not be saved.')" href="{{url('events')}}" class="float-right btn btn-info">Go Back</a>
                    </div>

                        <form method="POST"  action="{{url('events')}}">
                        {{csrf_field()}}
                            <table class="table table-hover">
                                <tr>
                                    <th>Name of Event</th>
                                    <td>
                                        <input type="text" class="form-control" name="title" placeholder="Enter the name of event" value="{{ (old('title')) }}" required> 
                                    </td>
                                </tr>
                                <tr>
                                    <th>Event Color</th>
                                    <td>
                                        <input type="color" class="form-control" name="color" placeholder="Enter the color" value="{{ (old('color')) }}" required>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Start Date of Event</th>
                                    <td>
                                        <input type="datetime-local" class="form-control" name="start_date" class="datetime" placeholder="Enter start date" value="{{ (old('start_date')) }}" required>
                                    </td>
                                </tr>
                                <tr>
                                    <th>End Date of Event</th>
                                    <td>
                                        <input type="datetime-local" class="form-control" name="end_date" class="datetime" placeholder="Enter end date" value="{{ (old('end_date')) }}" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="submit" class="btn btn-primary btn-block" value="Add Event Data" />
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>