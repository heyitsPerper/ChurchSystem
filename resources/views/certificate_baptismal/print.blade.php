@extends('layouts.master')
@section('title','Print Baptismal Certificate')
@section('content')
    <link rel="stylesheet" href="{{asset('css/print.min.css')}}">
    <script src="{{asset('js/print.min.js')}}"></script>

    <div class="container">
        <div class="row justify-content-center mt-5" id="body">
            <div class="col-md-10 card shadow border border-secondary p-3" id="certificate" id="inner_body">
                <h3 class="text-center mt-4" id="header"> Certificate of Baptism</h3>
                <div class="row justify-content-center" style="margin-top: 3rem">
                    <div class="col-md-6 ">
                        <h3 class="text-center mt-3 border-bottom" > <strong> {{$baptismal->child_name}} </strong></h3>
                    </div>
                </div>


                <div class="text-center mb-5">
                    <p >was baptized as a Christian in the name of the Father and the Son </p>
                    <p >and the Holy Spirit according to God's Word.</p>

                    <i >on</i>
                    <h6 style="margin-top: 2px">{{$date}}</h6>
                    <p style="margin-bottom: 2px">at</p>
                    <p style="margin-bottom: 2px">Nuestra Señora Dela Asuncion Parish</p>
                    <p style="margin-bottom: 2px">Brgy. Concepcion, Hilongos, Leyte</p>

                    <div class="row justify-content-center mt-3">
                        <div class="col-md-5">
                            <p class="text-center mt-3 border-bottom" style="margin-bottom: 0px"> <strong> {{$baptismal->minister}} </strong></p>
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
