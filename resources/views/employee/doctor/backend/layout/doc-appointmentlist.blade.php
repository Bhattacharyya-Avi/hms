@extends('employee.employee-master')
@section('content')

    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h4><strong>Doctor/</strong> Appointment List</h4>
        </div>
         <!-- <div class="col-auto ms-auto text-end mt-n1">
            <a href="{{route('doctor.add_ot_list')}}" class="btn btn-light bg-white me-2">Add</a>

        </div>  -->
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
                        <th>Patients's Name</th>
                        <th>Appointment time</th>
                        <th class="d-none d-md-table-cell">Appointment Date</th>
                        <th>Status</th>
                        <th class="table-action">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($appointment as $info)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$info->doctor->name}}</td>
                        <td>{{$info->Slot->slot_start}} - {{$info->Slot->slot_end}}</td>
                        <td class="d-none d-md-table-cell">{{$info->date}}</td>
                        <td>{{$info->status}}</td>
                        <td class="table-action">
                            <a href="{{route('doctor.appointment.report',$info->id)}}"><i class="align-middle" data-feather="edit-2"></i></a>
                            <a href="{{route('doctor.appointment.cancel', $info->id)}}"><i class="material-icons">close</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection
