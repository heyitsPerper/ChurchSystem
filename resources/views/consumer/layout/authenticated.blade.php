<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Church Management System</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}
</head>
<style>
    body{
        height: 100vh;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.navbar{
    background: rgba( 255, 255, 255, 0.1 );
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    /* backdrop-filter: blur( 5.5px ); */
    -webkit-backdrop-filter: blur( 5.5px );
    border-radius: 10px;
    /* border: 1px solid rgba( 255, 255, 255, 0.18 ); */
}

.card{
    background: rgba( 255, 255, 255, 0.65 );
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 4px );
    -webkit-backdrop-filter: blur( 4px );
    border-radius: 10px;
    border: 1px solid rgba( 255, 255, 255, 0.18 );
}
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark  shadow-sm">
        <div class="container">
          <a class="navbar-brand" href="{{ route('consumer.dashboard') }}">{{ env('APP_NAME') }}</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav ms-auto my-2 my-lg-0 " style="--bs-scroll-height: 100px;">
                <li class="nav-item ">
                    <a class="nav-link active" href="{{ route('consumer.dashboard') }}">Announcements</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link active" href="{{ route('consumer.officers_list') }}">Officers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('consumer.priest_sched') }}">Priest Schedules</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" id="requestDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       Request Certificates
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="requestDropdown">
                        <li><a href="{{route('consumer.request_baptismal_page')}}" class="dropdown-item">Baptismal</a></li>
                        <li><a href="{{route('consumer.request_confirmation_page')}}" class="dropdown-item">Confirmation</a></li>
                    </ul>
                </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{ auth()->guard('consumer')->user()->fullName() }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                    <li><a href="{{route('consumer.profile')}}" class="dropdown-item">Profile</a></li>
                    <li>
                        <form action="{{route('consumer.logout')}}" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </li>

                </ul>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
