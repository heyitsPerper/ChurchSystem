<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
    <link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css">
</head>
<body>
    <div class="d-flex justify-content-center">
        <div class="my-3">
            {{-- <div class="d-flex">
                <div class="me-auto"></div>
                <button class="btn btn-primary my-2" onclick="printJS({printable: 'paper', type: 'html', style: '@page { size: A4 portrait; }', css: '{{asset('css/app.css')}}' })">Print</button>
            </div> --}}
            <div class="card paper" id="paper" style="width: 21cm; height: 25cm;">
                <div class="paper-header text text-center mt-5">
                    <h5 class="mb-0"><b>Nuestra Señora dela Asuncion Parish</b></h5>
                    <h5 class="mb-0"><b>Income Statement</b></h5>
                    <small class="mb-0"><b>Cumulative through the month ending {{$month}} {{$year}}</b></small>
                </div>

                <div class="body" style="margin-top: 3rem; margin-right: 2.44cm; margin-left: 2.44cm;">
                    <p style="float: right;">Total</p>
                    <div style="border-bottom: 1px solid; margin-top:25px;width:100%;"></div>
                    <div>Income</div>
                    <div style="margin-left: 10px;">
                        <span>Church Collections</span>
                        <span style="float: right">₱ {{number_format($churchIncomesTotal,2)}}</span>
                    </div>
                    <div style="margin-left: 10px;">
                        <span>Chapel Collections</span>
                        <span style="float: right">₱ {{number_format($chapelIncomesTotal,2)}}</span>
                    </div>
                    <div style="margin-left: 10px;">
                        <span>Donations</span>
                        <span style="float: right">₱ {{number_format($donationsTotal,2)}}</span>
                    </div>

                    <div style="border-bottom: 1px solid; margin-top:25px;width:100%;"></div>

                    <div>
                        <span>Total Income</span>
                        <span style="float: right">₱ {{number_format($incomeTotal,2)}}</span>
                    </div>
                </div>

                <div class="body" style="margin-top: 5rem; margin-right: 2.44cm; margin-left: 2.44cm;">
                    <p style="float: right;">Total</p>
                    <div style="border-bottom: 1px solid; margin-top:25px;width:100%;"></div>
                    <div>Expenses</div>
                    @foreach ($expenses as $expense)
                        <div style="margin-left: 10px;">
                            <span>{{$expense->expense_for}}</span>
                            <span style="float: right">₱ {{number_format($expense->expense_amount,2)}}</span>
                        </div>
                    @endforeach
                    {{-- <div style="margin-left: 10px;">
                        <span>Chapel Collections</span>
                        <span style="float: right">{{$chapelIncomesTotal}}</span>
                    </div>
                    <div style="margin-left: 10px;">
                        <span>Donations</span>
                        <span style="float: right">{{$donationsTotal}}</span>
                    </div> --}}

                    <div style="border-bottom: 1px solid; margin-top:25px;width:100%;"></div>

                    <div>
                        <span>Total Expenses</span>
                        <span style="float: right">₱ {{number_format($expensesTotal,2)}}</span>
                    </div>
                </div>


                <div class="body" style="margin-top: 3rem; margin-right: 2.44cm; margin-left: 2.44cm;">
                    <div style="border-bottom: 1px solid; margin-top:25px;width:100%;"></div>

                    <div>
                        <span>Net Income</span>
                        <span style="float: right">₱ {{number_format($netTotal,2)}}</span>
                    </div>
                </div>

</body>
</html>
