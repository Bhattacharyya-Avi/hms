@extends('employee.employee-master')

@section('content')
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h4><strong>Doctor/</strong> Update OT Schedule</h4>
        </div>
         <!-- <div class="col-auto ms-auto text-end mt-n1">
            <a href="{{route('doctor.add_ot_list')}}" class="btn btn-light bg-white me-2">Add</a>

        </div>  -->
    </div>
    <div class="row">
        <div class="col-12 col-xl-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('doctor.update.ot',$ot->id)}}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Doctor name</label>
                            <input type="text" placeholder="Enter Doctor name" class="form-control" name='doctor_name' value="{{$ot->doctor_name}}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Doctor email</label>
                            <input type="email" placeholder="Enter email" class="form-control" name='doctor_email' value="{{$ot->doctor_email}}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Patient name</label>
                            <input type="text" placeholder="Enter Full name" class="form-control" name='Patient_name' value="{{$ot->Patient_name}}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Choose your time</label>
                            <input type="time" class="form-control" name='time' value="{{$ot->time}}">
                        </div>

                        <div class="mb-3">
                                <div class="form-group ">
                                <label class="form-label">Date</label>
                                <div class="mb-3">
                                    <div class="input-group">
                                    <input value="{{$ot->date}}" class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">OT status</label>
                            <select class="form-select flex-grow-1" name="ot_status">
                                <option>click to select</option>
                                <option @if($ot->status=='Delayed') selected @endif>Delayed</option>
                                <option @if($ot->status=='Active') selected @endif>Active</option>
                                <option @if($ot->status=='Cancel') selected @endif>Cancel</option>
                            </select>
                        </div>
                            <input type="submit" class="btn btn-primary" value="Submit" >
                            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

    <script>
        $(document).ready(function(){
            var date_input=$('input[name="date"]'); //our date input has the name "date"
            var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
            date_input.datepicker({
                format: 'mm/dd/yyyy',
                container: container,
                todayHighlight: true,
                autoclose: true,
            })
        })
    </script>

@endsection
