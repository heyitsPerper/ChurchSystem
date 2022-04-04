<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
    <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
    <link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex justify-content-center">
        <div class="my-3">
            <div class="d-flex">
                <div class="me-auto"></div>
                <button class="btn btn-primary my-2" onclick="printJS({printable: 'paper', type: 'html', style: '@page { size: A4 landscape; }', css: 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' })">Print</button>
            </div>
            <div class="card paper shadow" id="paper" style="width: 29cm; height: 18cm;">
                <div class="paper-header text text-center mt-5">
                    <h5 class="text-center mt-5" id="header"> CERTIFICATE OF CONFIRMATION</h5>
                    <h5 class="text-center" style="margin-top:8rem;" >In Remembrance of Our Lord Jesus Christ </h5>
                    <h3 class="text-center border-bottom" style="margin-left:25rem; margin-right:25rem;margin-top:2rem;" > <strong> {{$confirmation->child_name}} </strong></h3>
                    <h6 class="text-center" style="" > received for the first time</h6>

                </div>

                <div class="text-center">
                    <p >His Most Sacred Body and Blood in Holy Communion</p>
                    <p >on {{$date}}</p>

                    <p style="margin-bottom: 2px">in Nuestra Señora Dela Asuncion Parish</p>
                    <p style="margin-bottom: 2px">Brgy. Concepcion, Hilongos, Leyte</p>


                    <p class="text-center border-bottom" style="margin-left:25rem; margin-right:25rem; margin-top:5rem;margin-bottom: 5px"> <strong> {{$confirmation->minister}}</strong></p>
                    <p class="text-center">Minister</p>

                </div>
            </div>
        </div>
    </div>
</body>
</html>
