@extends('employee.nurse.backend.nurse-master')

@section('content')
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h3><strong>Nurse/</strong> Admited Patients</h3>
        </div>

        <!-- <div class="col-auto ms-auto text-end mt-n1">
            <a href="#" class="btn btn-light bg-white me-2">Invite a Friend</a>
            <a href="#" class="btn btn-primary">New Project</a>
        </div> -->
    </div>
    <div class="col-12 col-xl-12">
        <div class="card">

            <table class="table table-bordered">
                <thead>
                    <tr>

                        <th>Doctor's name</th>
                        <th>Patient's name</th>
                        <th>Patient's phone</th>
                        <th>Patient's address</th>
                        <th>Bed</th>
                        <th>Services</th>
                        <th>Duration</th>
                        <th class="table-action">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($details as $info)
                        <tr>
                            <td>{{$info->doctor_name}}</td>
                            <td>{{$info->patient_name}}</td>
                            <td>{{$info->patient_phone}}</td>
                            <td>{{$info->patient_address}}</td>
                            <td>{{$info->bed_type}} - {{$info->bed_number}}</td>
                            <td>{{$info->services}}</td>
                            <td>{{$info->admission_date}} - {{$info->release_date}}</td>
                            <td class="table-action">
                                <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>




@endsection
