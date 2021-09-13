@extends('employee.employee-master')
@section('content')

    <form action="{{route('admin.staff.update',$employee->id)}}" method="post">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label class="form-label">Employee type</label>
            <input type="text" class="form-control" placeholder="type" name="type" readonly value="{{$employee->role}}">
        </div>


        <div class="mb-3">
            <label class="form-label">Select employee Room</label>
            <select class="form-select flex-grow-1" name="employeeroom">
                <option>click to select</option>
                @foreach($chambers as $chamber)
                    <option>{{$chamber->chamber_number}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Employee name</label>
            <input type="text" placeholder="Enter Full name" class="form-control" name="employee_name" value="{{$employee->name}}">
        </div>

        <div class="mb-3">
            <label class="form-label">Employee Address</label>
            <input type="text" placeholder="Enter Full name" class="form-control" name="employee_address" value="{{$employee->address}}">
        </div>

        <div class="mb-3">
            <label class="form-label">Mobile Number</label>
            <input type="number" placeholder="Enter mobile number" class="form-control" name="phone_no" value="{{$employee->phone_no}}">
        </div>

        <div class="mb-3">
            <label class="form-label">Gender</label>
            <div class="div">

                <h5>
                    <label class="radio-container m-r-45">Male
                        <input type="radio" @if($employee->gender=='Male') checked @endif name="gender" value="Male">
                        <span class=""></span>
                    </label>
                    <label class="radio-container">Female
                        <input type="radio" @if($employee->gender=='Female') checked @endif name="gender" value="Female">
                        <span class=""></span>
                    </label>
                </h5>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" placeholder="Email" name="email" readonly value="{{$employee->email}}">
        </div>







        <!-- <input type="submit" class="btn btn-primary" value="Submit" > -->


        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
@endsection
