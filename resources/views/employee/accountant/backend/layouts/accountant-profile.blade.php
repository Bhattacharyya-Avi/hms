@extends('employee.accountant.accountant-master')

@section('content')
<div class="row">
  <div class="col-12 col-xl-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title">Update Information</h5>
        <h6 class="card-subtitle text-muted">Provide your information</h6>
      </div>
      <div class="card-body">
        <form>
          <div class="mb-3">
            <label class="form-label">Full name</label>
            <input type="text" placeholder="Full name" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">Address</label>
            <input type="text" placeholder="Address" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">Mobile Number</label>
            <input type="number" placeholder="mobile number" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">Appointment fee</label>
            <input type="number" placeholder="Appointment fee" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">Gender</label>
            <div class="div">                 
              <h5>
                <label class="radio-container m-r-45">Male
                  <input type="radio" checked="checked" name="gender">
                  <span class=""></span>
                </label>
                <label class="radio-container">Female
                  <input type="radio" name="gender">
                  <span class=""></span>
                </label>
              </h5>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" placeholder="Email">
          </div>

          <div class="mb-3">
            <label class="form-check m-0">
              <input type="checkbox" class="form-check-input">
              <span class="form-check-label">I Provider correct information</span>
            </label>
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection