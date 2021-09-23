@extends('employee.employee-master')

@section('content')
<!-- for multi select start -->
<!-- <style>.mt-100 {
        margin-top: 100%;
    }
    body {
        background: #00B4DB;
        background: -webkit-linear-gradient(to right, #0083B0, #00B4DB);
        background: linear-gradient(to right, #0083B0, #00B4DB);
        color: #514B64;
        min-height: 200vh
    }
    </style> -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
<!-- for multi select end -->



<div class="row mb-2 mb-xl-3">
    <div class="col-auto d-none d-sm-block">
        <h3><strong>Nurse/</strong> Admit patient</h3>
    </div>

    <!-- <div class="col-auto ms-auto text-end mt-n1">
            <a href="#" class="btn btn-light bg-white me-2">Invite a Friend</a>
            <a href="#" class="btn btn-primary">New Project</a>
        </div> -->
</div>

<div class="row">
    <div class="col-12 col-xl-12">
        <div class="card">

            <div class="card-body">
                <form action="{{route('nurse.admit_patient')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">patient's name</label>
                        <input type="text" placeholder="Enter Full name" class="form-control" name="patient_name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">patient's age</label>
                        <input type="number" placeholder="Enter patient's age" class="form-control" name="patient_age">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Doctor's name</label>
                        <div class="input-group mb-3">
                            <select class="form-select flex-grow-1" name="doctor_name">
                                <option>click to select</option>
                                @foreach($doctors as $doctor)
                                <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Patient's Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="patient_email">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">patient's Phone number</label>
                        <input type="number" placeholder="Enter Full name" class="form-control" name="patient_phone">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Patient's address</label>
                        <textarea class="form-control" placeholder="Address" rows="1" name="patient_address"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Bed type</label>
                        <div class="input-group mb-3">
                            <select class="form-select flex-grow-1" name="bed_type">
                                <option>click to select</option>
                                @foreach($bedstype as $bedtype)
                                <option>{{$bedtype->bed_type}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Bed Number</label>
                        <div class="input-group mb-3">
                            <select class="form-select flex-grow-1" name="bed_number">
                                <option>click to select</option>
                                @foreach($bedsnum as $bednum)
                                <option>{{$bednum->bed_number}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- multiple -->
                    <!-- <div class="mb-3" >
                    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">  need to provide link additionaly

                        <label class="form-label">Services</label>
                        <div style="size:100%!important;" class="input-group mb-3" >
                            <select id="choices-multiple-remove-button"  name="services" placeholder="Select Services"
                                multiple>
                                @foreach($services as $service)
                                <option value="{{$service->id}}">{{$service->service_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div> -->

                    <div class="mb-3" >
                    <!--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">  need to provide link additionaly  -->

                        <label class="form-label">Services</label>
                        <div style="size:100%!important;" class="input-group mb-3" >
                        <select name="services[]" class="custom-select mb-3" multiple>
                            <option selected>Hold ctrl to select multiple option.</option>
                            @foreach($services as $service)
                                <option value="{{$service->id}}">{{$service->service_name}}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="form-group ">
                            <label class="form-label">Admission date</label>
                            <div class="mb-3">
                                <div class="input-group">
                                    <input class="form-control" id="date" name="admission_date" placeholder="MM/DD/YYYY"
                                        type="text" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="form-group ">
                            <label class="form-label">Release date</label>
                            <div class="mb-3">
                                <div class="input-group">
                                    <input class="form-control" id="date" name="release_date" placeholder="MM/DD/YYYY"
                                        type="text" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Admission time</label>
                        <input type="time" class="form-control" name="admission_time">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>
<!--formden.js communicates with FormDen server to validate fields and submit via AJAX -->
<script type="text/javascript" src="https://formden.com/static/cdn/formden.js"></script>

<!-- Special version of Bootstrap that is isolated to content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />

<!-- script for admission_date -->
<script>
    $(document).ready(function () {
        var date_input = $('input[name="admission_date"]'); //our date input has the name "date"
        var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })

</script>

<!-- script for release_date -->
<script>
    $(document).ready(function () {
        var date_input = $('input[name="release_date"]'); //our date input has the name "date"
        var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })

</script>
<!-- multiselect -->
<script>
    $(document).ready(function () {

        var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
            removeItemButton: true,
            maxItemCount: 10,
            searchResultLimit: 1,
            renderChoiceLimit: 10
        });
    });

</script>
@endsection
