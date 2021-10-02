@extends('employee.employee-master')

@section('content')
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h3><strong>Doctor/</strong> Admited Patients</h3>
        </div>

        <!-- <div class="col-auto ms-auto text-end mt-n1">
            <a href="#" class="btn btn-light bg-white me-2">Invite a Friend</a>
            <a href="#" class="btn btn-primary">New Project</a>
        </div> -->
    </div>
    <div class="col-12 col-xl-12">
        <div class="card">
{{--            <div class="card-header">--}}
{{--                <input type="text" class="form-control form-control-sm bg-light rounded-2 border-0" style="width: 100px;" placeholder="Search..">--}}
{{--            </div>--}}

            <table class="table table-bordered">
                <thead>
                    <tr>

                        <th>Doctor's name</th>
                        <th>Patient's name</th>
                        <th>Patient's age</th>
                        <th>Patient's phone</th>
                        <th>Patient's address</th>
                        <th>Bed</th>
                        <th>Services</th>
                        <th>Duration</th>
                        <th class="table-action">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($admit as $info)
                        <tr>
                            <td>{{$info->user->name}}</td>
                            <td>{{$info->patient_name}}</td>
                            <td>{{$info->patient_age}}</td>
                            <td>{{$info->patient_phone}}</td>
                            <td>{{$info->patient_address}}</td>
                            <td>{{$info->bed_type}} - {{$info->bed_number}}</td>
                            <td>
                                @foreach($info->admitService as $data)
                                    <span class="badge badge-primary">
                                    {{$data->service->service_name}}
                                    </span>
                                @endforeach


                            </td>
                            <td>{{$info->admission_date}} - {{$info->release_date}}</td>
                            <td class="table-action">
{{--                                <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>--}}
{{--                                <a href="#"><i class="align-middle" data-feather="trash"></i></a>--}}
                                <a href="{{route('doctor.admit.relese.note',$info->id)}}"><i class="material-icons" style="font-size:18px">exit_to_app</i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>




@endsection
