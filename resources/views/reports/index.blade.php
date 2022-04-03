@extends('layouts.master')
@section('title','Generated Reports')
@section('content')
<script src="{{asset('js/chart.js')}}"></script>

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Generated Reports</h1>
    </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Total Collections-->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    TOTAL COLLECTIONS</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">₱ {{number_format($overall_total, 2)}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-coins fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    DONATIONS</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">₱ {{number_format($donations, 2)}}</div>
                                <a href="{{route('donations.index')}}" class="small card-link stretched-link">View Details</a>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-coins fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--  Deactive Announcements -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                EXPENSES</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">₱ {{number_format($expenses, 2)}}</div>
                                <a href="{{route('report.statement-conduct')}}" class="small card-link stretched-link">View Details</a>
                            </div>
                            <div class="col-auto">
                            <i class="far fa-check-circle fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="col-xl-5 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <form action="{{route('expense.statement')}}" method="post" class="col mr-2" target="_blank">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    GENERATE INCOME STATEMENTS</div>
                                @csrf
                                        <div class="form-group mr-2 w-100">
                                            <input type="number" name="month_issue" id="month_issue" class="form-control" placeholder="Enter month" min="1" max="12">
                                            @error('month_issue')
                                                <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group mr-2 w-100">
                                            <input type="number" name="year_issue" id="year_issue" class="form-control" placeholder="Enter year">
                                            @error('year_issue')
                                                <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group w-100">
                                            <button type="submit" class="btn  btn-info shadow-sm text-small">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-arrow-down" viewBox="0 0 16 16">
                                                    <path d="M8 5a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5A.5.5 0 0 1 8 5z"/>
                                                    <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
                                                  </svg>
                                                Generate
                                            </button>
                                        </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> --}}

            <!--  Deactive Announcements -->
            {{-- <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                EVENTS</div>
                            </div>
                            <div class="col-auto">
                            <i class="far fa-check-circle fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    Numbers of Collections Every Month
                </div>
                <div class="card-body">
                    {{-- <canvas id="myAreaChart" width="100%" height="40"></canvas> --}}
                    <canvas id="myChart" width="100%" height="40"></canvas>
                </div>

            </div>
        </div>
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-bar me-1"></i>
                    Monthly Collections (Bar Chart)
                </div>
                <div class="card-body"><canvas id="monthCollection" width="100%" height="40"></canvas></canvas></div>
            </div>
        </div>
    </div>


{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script> --}}
{{-- <script type="text/javascript">
	var _ydata=JSON.parse('{!! json_encode($months) !!}');
	var _xdata=JSON.parse('{!! json_encode($monthCount) !!}');
</script>
<script src="{{asset('assets/demo/chart-area-demo.js')}}"></script>
<script src="{{asset('assets/demo/chart-bar-demo.js')}}"></script> --}}

<script>
    const collectionCount = {{json_encode($monthCount)}}
    const collectionMonthly = {{json_encode($monthlyCollection)}}
    console.log(collectionMonthly)
    const labels = [
      'January',
      'February',
      'March',
      'April',
      'May',
      'June',
      'July',
      'August',
      'September',
      'October',
      'November',
      'December'
    ];

    const data = {
      labels: labels,
      datasets: [{
        label: 'Numbers of Collection every month',
        backgroundColor: 'rgb(65,105,225)',
        borderColor: 'rgb(65,105,225)',
        data: collectionCount,
      }]
    };


    const dataMonthly = {
        labels: labels,
      datasets: [{
        label: 'Collection every month',
        backgroundColor: 'rgb(65,105,225)',
        borderColor: 'rgb(65,105,225)',
        data: collectionMonthly,
      }]
    }

    const config = {
      type: 'line',
      data: data,
      options: {}
    };
  </script>
<script>
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );

    const monthlyCollectionChart = new Chart(
        document.getElementById('monthCollection'),
        {
        type: 'bar',
        data: dataMonthly,
        options: {}
        }
    )
  </script>
@endsection
