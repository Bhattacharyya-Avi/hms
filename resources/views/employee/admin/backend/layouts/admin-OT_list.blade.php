@extends('employee.admin.backend.admin-master')
@section('content')
<link rel="stylesheet" href="{{url('/css/table-style.css')}}">
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h4><strong>Admin/</strong> OT List</h4>
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
                    <th>Doctor Email</th>
                    <th>Appointment time</th>
                    <th class="d-none d-md-table-cell">Appointment Date</th>
                    <th>Appointment Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($otlist as $list)
                <tr>
                    <td>{{$list->Patient_name}}</td>
                    <td>{{$list->doctor_name}}</td>
                    <td>{{$list->doctor_email}}</td>
                    <td>{{$list->time}}</td>
                    <td>{{$list->date}}</td>
                    <td>active</td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>
@endsection