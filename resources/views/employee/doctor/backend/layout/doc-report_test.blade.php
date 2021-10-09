@extends('employee.employee-master')
@section('content')
    <div class="container-fluid p-0">

        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h4><strong></strong> Report</h4>
            </div>

            <div class="col-auto ms-auto text-end mt-n1">
{{--                <a href="#" class="btn btn-warning" onclick="printDiv('printableArea')">Print</a>--}}
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card" id="printableArea">
                    <div class="card-body m-sm-3 m-md-5" >
                        <div class="mb-4" style="position: center !important;">
                            <strong style="font-size: 25px;">Life Support Hospital</strong>
                        </div>


                        <hr class="my-4" />

                        <div class="row mb-4">
                            <form action="#" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="text-muted">Patient name <strong>
                                                ABCD
                                            </strong> <br>
                                            Doctor name <strong>
                                                XYZ
                                            </strong></div>
                                    </div>
                                    <div class="col-md-3" style="float: right!important;">
                                        <div class="text-muted"> Temp
                                            <input placeholder="body temp"  type="text"  name="">
                                        </div>
                                        <br>
                                        <div class="text-muted">BP
                                            <input placeholder="BP"  type="text"  name="">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <hr>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Report</label>
                                    <textarea name="report" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>


                        </div>

                        <div class="text-center">
                            <p class="text-sm">
                                <strong>Extra note:</strong>
                                Thank you for being with us.
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
