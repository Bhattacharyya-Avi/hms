@extends('employee.employee-master')
@section('content')
<link rel="stylesheet" href="{{url('/css/table-style.css')}}">
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h4><strong>Admin/</strong> Employee List</h4>
        </div>

         <div class="col-auto ms-auto text-end mt-n1">
            <!-- <a href="{{route('doctor.add_ot_list')}}" class="btn btn-light bg-white me-2">Add</a> -->
            <!-- modal trigger -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Employee</button>
        </div>
    </div>
    <div class="col-12 col-xl-12">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="card">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Type</th>
                        <th>Chamber number</th>
                        <th>Employee name</th>
                        <th>Gender</th>
                        <th>Address</th>

                        <th class="d-none d-md-table-cell">Mobile number</th>

                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employees as $employee)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$employee->role}}</td>
                        <td>{{$employee->room}}</td>
                        <td>{{$employee->name}}</td>
                        <td>{{$employee->gender}}</td>
                        <td>{{$employee->address}}</td>
                        <td class="d-none d-md-table-cell">{{$employee->phone_no}}</td>
                        <td>{{$employee->email}}</td>
                        <td class="table-action">
                            <a href="{{route('admin.staff.edit',$employee->id)}}"><i class="align-middle" data-feather="edit-2"></i></a>
                            <a href="{{route('admin.staff.delete', $employee->id)}}"><i class="align-middle" data-feather="trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$employees->links('pagination::bootstrap-4')}}
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add an employee</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <form action="{{route('admin.add_staff')}}" method="post">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Select employee type</label>
                    <select class="form-select flex-grow-1" name="employeetype" required>
                        <option>click to select</option>
                        <option>Admin</option>
                        <option>Doctor</option>
                        <option>Nurse</option>
                        <option>Accountant</option>
                    </select>
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
                    <input type="text" placeholder="Enter Full name" class="form-control" name="employee_name" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Employee Address</label>
                    <input type="text" placeholder="Enter Full name" class="form-control" name="employee_address" required>
                </div>

                <div class="mb-3">
                <label class="form-label">Mobile Number</label>
                <input type="number" placeholder="Enter mobile number" class="form-control" name="phone_no" required>
                </div>

{{--                <div class="mb-3">--}}
{{--                    <label class="form-label">Gender</label>--}}
{{--                    <div class="custom-control custom-radio">--}}
{{--                        <input name="gender" value="Male" type="radio" id="customRadio1"  class="custom-control-input">--}}
{{--                        <label  class="custom-control-label" for="customRadio1">Male</label>--}}
{{--                    </div>--}}
{{--                    <div class="custom-control custom-radio">--}}
{{--                        <input name="gender" value="Female" type="radio" id="customRadio2"  class="custom-control-input">--}}
{{--                        <label  class="custom-control-label" for="customRadio1">Female</label>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="mb-3">
                    <label class="form-label">Gender</label>
                    <select class="form-select flex-grow-1" name="gender" required>
                        <option>click to select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" placeholder="Email" name="email" required>
                </div>

                <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password" required>
                </div>





                <!-- <input type="submit" class="btn btn-primary" value="Submit" > -->


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
    </div>

@endsection
