@extends('employee.doctor.backend.doctor-master')
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
        <div class="card">
            
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width:40%;">Patients's Name</th>
                        <th style="width:20%">Appointment time</th>
                        <th class="d-none d-md-table-cell" style="width:20%">Appointment Date</th>
                        <th>Status</th>
                        <th class="table-action" style="width:10%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Vanessa Tucker</td>
                        <td>10:00 am</td>
                        <td class="d-none d-md-table-cell">June 21, 2020</td>
                        <td>Active</td>
                        <td class="table-action">
                            <!-- <a href="#"><i class="align-middle" data-feather="edit-2"></i></a> -->
                            <a href="#"><i class="material-icons">close</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>William Harris</td>
                        <td>9:14 am</td>
                        <td class="d-none d-md-table-cell">May 15, 2020</td>
                        <td>Active</td>
                        <td class="table-action">
                            <!-- <a href="#"><i class="align-middle" data-feather="edit-2"></i></a> -->
                            <a href="#"><i class="material-icons">close</i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


@endsection