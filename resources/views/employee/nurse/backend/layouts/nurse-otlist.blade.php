@extends('employee.nurse.backend.nurse-master')

@section('content')
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h3><strong>Nurse/</strong> OT list</h3>
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
                        <th class="d-none d-md-table-cell">OT Date</th>
                        <th>OT time</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ots as $ot)
                        <tr>
                            <td>{{$ot->doctor_name}}</td>
                            <td>{{$ot->Patient_name}}</td>
                            <td class="d-none d-md-table-cell">{{$ot->date}}</td>
                            <td>{{$ot->time}}</td>
                            <td>Active</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$ots->links('pagination::bootstrap-4')}}
        </div>
    </div>




@endsection
