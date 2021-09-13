@extends('employee.employee-master')

@section('content')
  <div class="row mb-2 mb-xl-3">
    <div class="col-auto d-none d-sm-block">
        <h4><strong>Nurse/</strong> Profile</h4>
    </div>
  </div>
<div class="row">
  <div class="col-12 col-xl-12">
    <div class="card">
      <!-- <div class="card-header">
        <h5 class="card-title">Update Information</h5>
        <h6 class="card-subtitle text-muted">Provide your information</h6>
      </div> -->
      <div class="card-body">
        <form>
          <div class="mb-3">
            <label class="form-label">Full name</label>
            <input type="text" placeholder="Full name" class="form-control" value="{{$profile->name}}">
          </div>

          <div class="mb-3">
            <label class="form-label">Address</label>
            <input type="text" placeholder="Address" class="form-control" value="{{$profile->address}}">
          </div>

          <div class="mb-3">
            <label class="form-label">Mobile Number</label>
            <input type="number" placeholder="mobile number" class="form-control" value="{{$profile->phone_no}}">
          </div>

          <div class="mb-3">
            <label class="form-label">Gender</label>
            <div class="div">
              <h5>
                <label class="radio-container m-r-45">Male
                  <input type="radio" @if($profile->gender=='Male') checked @endif name="gender">
                  <span class=""></span>
                </label>
                <label class="radio-container">Female
                  <input type="radio" name="gender" @if($profile->gender=='Female') checked @endif>
                  <span class=""></span>
                </label>
              </h5>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" placeholder="Email" value="{{$profile->email}}">
          </div>


          <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
