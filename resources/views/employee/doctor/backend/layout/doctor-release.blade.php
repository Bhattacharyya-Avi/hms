@extends('employee.employee-master')
@section('content')
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h4><strong></strong> Release Note</h4>
            </div>

            <div class="col-auto ms-auto text-end mt-n1">
             <a href="#" class="btn btn-warning" onclick="printDiv('printableArea')">Print</a>
{{--             <a href="{{route('admin.admited.status.update',$notes->id)}}" class="btn btn-success">Release</a>--}}
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

                                <p style="font-family: 'Gill Sans MT'; font-size: 20px; text-align: justify-all;">
                                    This paper certifies that patient <strong>@php echo($notes->patient_name) @endphp</strong> age <strong> @php echo($notes->patient_age) @endphp</strong> address <strong> @php echo($notes->patient_address) @endphp</strong> was admitted to
                                    <strong>Lifesupport hospital</strong> from <strong>@php echo($notes->admission_date) @endphp </strong>to <strong>@php echo($notes->release_date) @endphp </strong> on @php echo($notes->bed_type) @endphp bed number @php echo($notes->bed_number) @endphp under <strong>doctor @php echo($notes->user->name) @endphp </strong>.
                                    <br> <br>
                                    We are releasing <strong>@php echo($notes->patient_name) @endphp</strong> with the advices of doctor. We request @php echo($notes->patient_name) @endphp to follow the advices.
                                    <br> <br>
                                   <strong>Lifesupport hospital wish His/her longevity and Successful life.</strong>
                                </p>
                            </div>
                        </div>
                        <br><br>
                        <div class="text-center">
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
