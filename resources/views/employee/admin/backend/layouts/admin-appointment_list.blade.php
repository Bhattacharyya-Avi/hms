@extends('employee.employee-master')
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
        <div class="card-header">
            <input type="text" class="form-control form-control-sm bg-light rounded-2 border-0" style="width: 100px;"
                   placeholder="Search..">
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Sl.</th>
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
                @foreach($appointments as $appointment)
{{--                    @dd($appointment)--}}
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$appointment->full_name}}</td>
                    <td>{{$appointment->user->name}}</td>
                    <td>{{$appointment->email}}</td>
                    <td>{{ $appointment->slot->slot_name }}</td>
                    <td>{{$appointment->date}}</td>
                    <td>{{$appointment->appointmentfee}}</td>

                     <td>{{$appointment->status}}</td> <!--static data -->
                </tr>
                @endforeach

            </tbody>
        </table>
        <!-- without this design will be broken -->
        {{-- {{$appointment->links('pagination::bootstrap-4')}} --}}
    </div>
</div>
@endsection
