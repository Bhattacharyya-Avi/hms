@extends('employee.employee-master')
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
                <div class="card" id="printableArea">
                    <div class="card-body m-sm-3 m-md-5" >
                        <div class="mb-4" style="position: center !important;">
                            <strong style="font-size: 25px;">Life Support Hospital</strong>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-muted">Patient <strong>
                                        {{$info->doctor->name}}
                                    </strong> <br>
                                    Doctor <strong>
                                        {{$info->user->name}}
                                    </strong></div>
                            </div>
                        </div>

                        <hr class="my-4" />

                        <div class="row mb-4">
                            <form action="{{route('doctor.appointment.report.post',$info->id)}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Example textarea</label>
                                    <textarea name="report" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$info->report}}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>

{{--                            <form action="{{route('doctor.appointment.report.post')}}" method="post">--}}
{{--                                @csrf--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="exampleFormControlTextarea1">Write report</label>--}}
{{--                                    <textarea name="report" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>--}}
{{--                                </div>--}}
{{--                                <a type="submit" class="btn btn-info">Add</a>--}}
{{--                            </form>--}}

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
