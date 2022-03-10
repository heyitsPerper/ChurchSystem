@extends('layouts.master')
@section('title','Print Confirmation Certificate')
@section('content')
    <link rel="stylesheet" href="{{asset('css/print.min.css')}}">
    <script src="{{asset('js/print.min.js')}}"></script>

    <div class="container">
        <div class="row justify-content-center mt-5" id="body">
            <div class="col-md-10 card shadow border border-secondary p-3" id="certificate" id="inner_body">
                <h3 class="text-center mt-4" id="header"> CERTIFICATE OF CONFIRMATION </h3>
                <div class="row justify-content-center" style="margin-top: 3rem">
                    <div class="col-md-6 text-center mt-3">
                        <p>In Remembrance of Our Lord Jesus Christ</p>
                        <h2 class=" border-bottom" > <strong> {{$confirmation->child_name}} </strong></h2>
                        <p >received for the first time</p>
                    </div>
                </div>


                <div class="text-center mb-5 mt-3">
                    <h4>His Most Sacred Body and Blood in Holy Communion</h4>
                    <p >on {{$date}}</p>
                    <p style="margin-bottom: 2px">in Nuestra Señora Dela Asuncion Parish</p>
                    <p style="margin-bottom: 2px">Brgy. Concepcion, Hilongos, Leyte</p>

                    <div class="row justify-content-center mt-3">
                        <div class="col-md-5">
                            <p class="text-center mt-3 border-bottom" style="margin-bottom: 0px"> <strong> {{$confirmation->minister}} </strong></p>
                            <p class="text-center">Minister</p>
                        </div>
                    </div>

                </div>

            </div>
            <button type="button" class="btn btn-primary col-md-3 mt-3" onclick="printJS({printable: 'certificate', type: 'html', style: '@page { size: A4 landscape; }', css: '{{asset('css/bootstrap.min.css')}}' })">
                Print Form
            </button>
        </div>
    </div>

@endsection
