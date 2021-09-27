@extends('employee.employee-master')

@section('content')

<div class="container-fluid p-0">

    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h4><strong></strong> Appointment Bill</h4>
        </div>

        <div class="col-auto ms-auto text-end mt-n1">
            <a href="#" class="btn btn-warning" onclick="printDiv('printableArea')">Print</a>
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
                        <div class="col-md-6">
                            Patient <strong>
                                {{$info->user_name}}
                            </strong> <br>
                            Doctor <strong>
                                {{$info->doctor_name}}
                            </strong>
                        </div>
                    </div>

                    <table class="table table-sm">
                        <thead>
                        <tr>
                            <th style="width: 25px">Name</th>
                            <th style="width: 25px" >Amount</th>
                            <th style="width: 25px">Deu amount</th>
                            <th style="width: 25px">Payment Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Patient <strong>
                                    {{$info->user_name}}
                                </strong> <br>
                                Doctor <strong>
                                    {{$info->user->name}}
                                </strong></td>
                            <td >{{$info->total_amount}}</td>
                            <td>0</td>
                            <td>{{$info->payment_status}}</td>
                        </tr>
                        </tbody>
                    </table>

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
