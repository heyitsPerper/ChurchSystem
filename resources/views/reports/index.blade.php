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

            <!--  Collections Monthly -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                COLLECTIONS (MONTHLY)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">₱ {{number_format($thisMonth, 2)}}</div>
                                    <a class="small stretched-link" href="{{url('church_collections')}}">View Details</a>
                            </div>
                            <div class="col-auto">
                            <i class="fas fa-check-circle fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
