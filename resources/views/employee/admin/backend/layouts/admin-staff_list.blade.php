@extends('employee.admin.backend.admin-master')
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
        <div class="card">
            
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Type</th>
                        <th>Room number</th>
                        <th>Employee name</th>
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
                        <td>{{$employee->employeetype}}</td>
                        <td>{{$employee->employee_room}}</td>
                        <td>{{$employee->employee_name}}</td>
                        <td>{{$employee->employee_address}}</td>
                        <td class="d-none d-md-table-cell">{{$employee->phone_no}}</td>
                        <td>{{$employee->email}}</td>
                        <td class="table-action">
                            <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                            <a href="#"><i class="align-middle" data-feather="trash"></i></a>
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
                    <select class="form-select flex-grow-1" name="employeetype">
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
                    <input type="text" placeholder="Enter Full name" class="form-control" name="employee_name">
                </div>

                <div class="mb-3">
                    <label class="form-label">Employee Address</label>
                    <input type="text" placeholder="Enter Full name" class="form-control" name="employee_address">
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
                <label class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password">
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