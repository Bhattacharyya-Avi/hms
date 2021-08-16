@extends('employee.admin.backend.admin-master')
@section('content')
<link rel="stylesheet" href="{{url('/css/table-style.css')}}">
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h4><strong>Admin/</strong> Appointment List</h4>
        </div>

        <!-- <div class="col-auto ms-auto text-end mt-n1">
            <a href="{{route('doctor.add_ot_list')}}" class="btn btn-light bg-white me-2">Add</a>
        </div>  -->
    </div>
    <div class="col-12 col-xl-12">
    <div class="card">
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Patient's Name</th>
                    <th>Doctor Name</th>
                    <th>Email</th>
                    <th>Appointment time</th>
                    <th class="d-none d-md-table-cell" >Appointment Date</th>
                    <th>Appointment Fee</th>
                    <th>Appointment Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($appointment as $appoint)
                <tr>
                    <td>{{$appoint->full_name}}</td>
                    <td>{{$appoint->Staff->employee_name}}</td>
                    <td>{{$appoint->email}}</td>
                    <td>{{$appoint->time}}</td>
                    <td>{{$appoint->date}}</td>
                    <td>{{$appoint->appointmentfee}}</td>
                    
                     <td>active</td> <!--static data -->
                </tr>
                @endforeach
                
            </tbody>
        </table>
        <!-- without this design will be broken -->
        {{$appointment->links('pagination::bootstrap-4')}}
    </div>
</div>
@endsection