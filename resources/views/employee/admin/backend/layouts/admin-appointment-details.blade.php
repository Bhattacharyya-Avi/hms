@extends('employee.admin.backend.admin-master')
@section('content')
    <link rel="stylesheet" href="{{url('/css/table-style.css')}}">
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h4><strong>Doctor : {{ $doctor_name->employee_name}}/</strong> Appointment details</h4>
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
                    <th>#</th>
                    <th>Patient's Name</th>
                    <th>Appointment time</th>
                    <th class="d-none d-md-table-cell">Appointment Date</th>
                </tr>
                </thead>
                <tbody>
                @foreach($appointment_details as $appointment)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$appointment->full_name}}</td>
                        <td>{{$appointment->time}}</td>
                        <td>{{$appointment->date}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>

        </div>
    </div>
@endsection
