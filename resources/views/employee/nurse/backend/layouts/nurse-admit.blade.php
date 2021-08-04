@extends('employee.nurse.backend.nurse-master')

@section('content')

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
            <form>
            <div class="mb-3">
                <label class="form-label">patient's name</label>
                <input type="text" placeholder="Enter Full name" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Doctor's name</label>
                <div class="input-group mb-3">
                <select class="form-select flex-grow-1">
                    <option>click to select</option>
                    <option>One</option>
                    <option>Two</option>
                    <option>Three</option>
                </select>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Patient's phone no</label>
                <input type="email" class="form-control" placeholder="Email">
            </div>

            <div class="mb-3">
                <label class="form-label">Patient's address</label>
                <textarea class="form-control" placeholder="Address" rows="1"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Additional notes</label>
                <textarea class="form-control" placeholder="Address" rows="2"></textarea>
            </div>

            <div class="mb-3">
                <div class="">
                <form action="" >
                    <div class="form-group ">
                    <label class="form-label">Admission date</label>
                    <div class="mb-3">
                        <div class="input-group">
                        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text"/>
                        </div>
                    </div>
                    </div>
                </form>
                </div>
            </div>

            <div class="mb-3">
                <div class="">
                <form action="" >
                    <div class="form-group ">
                    <label class="form-label">Release date</label>
                    <div class="mb-3">
                        <div class="input-group">
                        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text"/>
                        </div>
                    </div>
                    </div>
                </form>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Admission time</label>
                <input type="time" class="form-control">
            </div>

            

            <!-- <div class="mb-3">
                <label class="form-check m-0">
                <input type="checkbox" class="form-check-input">
                <span class="form-check-label">I want to book</span>
                </label>
            </div> -->
            <button type="submit" class="btn btn-primary">Submit</button>
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