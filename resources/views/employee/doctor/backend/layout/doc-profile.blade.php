@extends('employee.employee-master')

@section('content')

  <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Doctor/</strong> Profile</h3>
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
        <form action="{{route('doctor.profile.update',$profile->id)}}">
          <div class="mb-3">
            <label class="form-label">Full name</label>
            <input type="text" placeholder="Full name" name="name" class="form-control" value="{{$profile->name}}">
          </div>

          <div class="mb-3">
            <label class="form-label">Address</label>
            <input type="text" placeholder="Address" name="address" class="form-control" value="{{$profile->address}}">
          </div>

          <div class="mb-3">
            <label class="form-label">Mobile Number</label>
            <input type="number" placeholder="mobile number" name="phone_no" class="form-control"value="{{$profile->phone_no}}">
          </div>

{{--          <div class="mb-3">--}}
{{--            <label class="form-label">Appointment fee</label>--}}
{{--            <input type="number" placeholder="Appointment fee" class="form-control">--}}
{{--          </div>--}}

          <div class="mb-3">
            <label class="form-label">Gender</label>
            <div class="div">
              <h5>
                <label class="radio-container m-r-45">Male
                  <input type="radio" value="Male" name="gender" @if($profile->gender=='Male') checked @endif>
                  <span class=""></span>
                </label>
                <label class="radio-container" >Female
                  <input type="radio" value="Female" name="gender"  @if($profile->gender=='Female') checked @endif>
                  <span class=""></span>
                </label>
              </h5>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" readonly class="form-control" placeholder="Email" value="{{$profile->email}}">
          </div>

          <!-- <div class="mb-3">
            <label class="form-check m-0">
              <input type="checkbox" class="form-check-input">
              <span class="form-check-label">I Provider correct information</span>
            </label>
          </div> -->
          <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
