<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('admin/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
</head>
<body>
    <header>
        <div class="main">
            <div class="logo">
                <img src="admin/img/churchlogo.png">
            </div>
            <div class="title">
                <h1>CHURCH SYSTEM</h1>
            </div>
            <div class="buttons">
                @if (Route::has('login'))
                    <div class="card-body">
                        @auth
                            <a href="{{ url('announcements') }}" class="btn btn-primary btn-user">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-light btn-user">Administrator</a>

                            @if (Route::has('consumer.confirmForm'))
                                <a href="{{ route('consumer.loginForm') }}" class="btn btn-light btn-user">Login Users</a>

                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </header>
</body>
</html>
