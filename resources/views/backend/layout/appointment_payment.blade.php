@extends('backend.master')
@section('content')
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h4><strong></strong> Report</h4>
            </div>

            <div class="col-auto ms-auto text-end mt-n1">
                <a href="#" class="btn btn-warning" onclick="printDiv('printableArea')">Print</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body m-sm-3 m-md-5" id="printableArea">
                        <div class="mb-4" style="position: center !important;">
                            <strong style="font-size: 25px;">Life Support Hospital</strong>
                        </div>

                        <hr class="my-4" />

                        <div class="row" >
                            <div class="col-md-12">
                                <p>
                                <h6 style="float: right">Appointment date <strong>{{$report->date}}</strong></h6>
                                   Doctor name <strong>{{$report->user->name}}</strong> <br>
                                   Patient name <strong>{{$report->doctor->name}}</strong>
                                </p>
                                <hr>
                                <p>
                                    You need to follow the listed advices
                                </p>

                                <p style="font-family: 'Gill Sans MT'; font-size: 20px; text-align: justify-all;">

                                    {{$report->report}}
                                </p>

                            </div>
                        </div>
                        <br><br>
                        <div class="text-center">
                            <p class="text-sm" style="font-family: 'Gill Sans MT';">
                                <strong>Get well soon... </strong>
                            </p>
                            <p class="text-sm" style="font-family: 'Gill Sans MT';">
                                <strong>Thank you for giving us the chance to serve. </strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script type="text/javascript">
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }

    </script>
    @endsection
