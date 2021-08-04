@extends('backend.master')
@section('content')


  <div class="row">
    <div class="col-12 col-xl-12">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title">Book an Appointment</h5>
          <h6 class="card-subtitle text-muted">Fill-up the form bellow.</h6>
        </div>
        <div class="card-body">
          <form action="{{route('user.appointment.submit')}}" method="post">
            @csrf
            <div class="mb-3">
              <label class="form-label">Full name</label>
              <input type="text" placeholder="Enter Full name" class="form-control" name="full_name">
            </div>

            <div class="mb-3">
              <label class="form-label">Mobile Number</label>
              <input type="number" placeholder="Enter mobile number" class="form-control" name="phone_no">
            </div>

            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control" placeholder="Email" name="email">
            </div>

            <div class="mb-3">
              <label class="form-label">Select doctor</label>
              <select class="form-select flex-grow-1" name="doctorname">
                <option>click to select</option>
                <option>One</option>
                <option>Two</option>
                <option>Three</option>
              </select>
            </div>

            <div class="mb-3">
              <!-- <div class="">
                <form action="" > -->
                  <div class="form-group ">
                    <label class="form-label">Date</label>
                    <div class="mb-3">
                      <div class="input-group">
                        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text"/>
                      </div>
                    </div>
                  </div>
                <!-- </form>
              </div> -->
            </div>

            <div class="mb-3">
              <label class="form-label">Choose your time</label>
              <input type="time" class="form-control" name="time">
            </div>


            <div class="mb-3">
              <label class="form-check m-0">
                <input type="checkbox" class="form-check-input">
                <span class="form-check-label">I want to book</span>
              </label>
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
<!-- appointment section ends -->