@extends('backend.master')
@section('content')
  <div class="row mb-2 mb-xl-3">
    <div class="col-auto d-none d-sm-block">
      <h3><strong>User/</strong> Book An Appointment</h3>
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
        @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
          <form action="{{route('user.appointment.submit')}}" method="post">
            @csrf
            <div class="mb-3">
              <label class="form-label">Full name</label>
              <input type="text" placeholder="Enter your name." value="{{$data->name}}" class="form-control" name="full_name" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Mobile Number</label>
              <input type="number" placeholder="Enter your mobile number." value="{{$data->phone_no}}" class="form-control" name="phone_no" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control" placeholder="Enter your email." value="{{$data->email}}" name="email" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Select doctor</label>
              <select class="form-select flex-grow-1" name="doctorname" required>
                  <option>click to select</option>
                @foreach($doctors as $docname)
                <option value="{{$docname->id}}">{{$docname->name}}</option>
                @endforeach
              </select>
            </div>

            <div class="mb-3">
              <label class="form-label">Appointment fee</label>
              <select class="form-select flex-grow-1" name="appointmentfee">
                <option>click to select</option>
                <option>300</option>
              </select>
            </div>

            <!-- <div class="mb-3">
              <div class="form-group ">
                <label class="form-label">Date</label>
                <div class="mb-3">
                  <div class="input-group">
                    <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text" required>
                  </div>
                </div>
              </div>
            </div> -->
            <div class="form-group">
                                    <label for="date" class="form-label">Date</label>
                                    <input required type="date" value="{{ date('Y-m-d') }}"
                                        min="{{ date('Y-m-d') }}" class="form-control"
                                        id="purchase_date" name="date">
                                </div>

              <div class="mb-3">
                  <label class="form-label">Select Time</label>
                  <select class="form-select flex-grow-1" name="time">
                      <option>Click to select</option>
                      @foreach($slots as $slot)
                          <option value="{{$slot->id}}">Slot {{$slot->slot_start}} - {{$slot->slot_end}}</option>
                      @endforeach
                  </select>
              </div>
{{--            <div class="mb-3">--}}
{{--              <label class="form-label">Choose your time</label>--}}
{{--              <input type="time" class="form-control" name="time">--}}
{{--            </div>--}}


            <!-- <div class="mb-3">
              <label class="form-check m-0">
                <input type="checkbox" class="form-check-input">
                <span class="form-check-label">I want to book</span>
              </label>
            </div> -->
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

{{--  <script>--}}
{{--    $(document).ready(function(){--}}
{{--      var date_input=$('input[name="date"]'); //our date input has the name "date"--}}
{{--      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";--}}
{{--      date_input.datepicker({--}}
{{--        format: 'mm/dd/yyyy',--}}
{{--        container: container,--}}
{{--        todayHighlight: true,--}}
{{--        autoclose: true,--}}
{{--      })--}}
{{--    })--}}
{{--  </script>--}}
@endsection
<!-- appointment section ends -->
