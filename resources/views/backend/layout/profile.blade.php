@extends('backend.master')

@section('content')

  <div class="row mb-2 mb-xl-3">
    <div class="col-auto d-none d-sm-block">
        <h3><strong>User/</strong> Profile</h3>
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
        <form action="{{route('user.profile.update',$profile->id)}}" method="post">
            @csrf
            @method('PUT')
          <div class="mb-3">
            <label class="form-label">Full name</label>
            <input type="text" placeholder="Enter your name." class="form-control" name="name" value="{{$profile->name}}" >
          </div>

          <div class="mb-3">
            <label class="form-label">Address</label>
            <input type="text" placeholder="Enter your address." class="form-control" name="address" value="{{$profile->address}}">
          </div>

          <div class="mb-3">
            <label class="form-label">Mobile Number</label>
            <input type="number" placeholder="Enter your mobile number." class="form-control" name="phone_no" value="{{$profile->phone_no}}">
          </div>

          <div class="mb-3">
            <label class="form-label">Gender</label>
            <div class="div">

                <h5>
                    <label class="radio-container m-r-45">Male
                        <input value="Male" type="radio" @if($profile->gender=='Male') checked @endif name="gender" >
                        <span class=""></span>
                    </label>
                    <label class="radio-container">Female
                        <input value="Female" type="radio" @if($profile->gender=='Female') checked @endif name="gender" >
                        <span class=""></span>
                    </label>
                </h5>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" readonly class="form-control" placeholder="Enter your email." value="{{$profile->email}}">
          </div>

          <!-- <div class="mb-3">
            <label class="form-check m-0">
              <input type="checkbox" class="form-check-input">
              <span class="form-check-label">I Provider correct information</span>
            </label>
          </div> -->
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
