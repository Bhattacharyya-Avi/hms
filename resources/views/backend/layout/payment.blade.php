@extends('backend.master')
@section('content')

    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h3><strong>User/</strong> Payment History</h3>
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
                    <th style="width:40%;">Doctor's Name</th>
                    <th style="width:25%">Appointment time</th>
                    <th class="d-none d-md-table-cell" style="width:25%">Appointment Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Vanessa Tucker</td>
                    <td>10:00 am</td>
                    <td class="d-none d-md-table-cell">June 21, 2020</td>
                    <td>paid</td>
                    <!-- <td class="table-action">
                        <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                        <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                    </td> -->
                </tr>
                <tr>
                    <td>William Harris</td>
                    <td>9:14 am</td>
                    <td class="d-none d-md-table-cell">May 15, 2020</td>
                    <td>paid</td>
                    <!-- <td class="table-action">
                        <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                        <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                    </td> -->
                </tr>
                <tr>
                    <td>Sharon Lessman</td>
                    <td>7:04 pm</td>
                    <td class="d-none d-md-table-cell">September 14, 2020</td>
                    <td>Unpaid</td>
                    <!-- <td class="table-action">
                        <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                        <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                    </td> -->
                </tr>
                <tr>
                    <td>Christina Mason</td>
                    <td>7:50 am</td>
                    <td class="d-none d-md-table-cell">April 2, 2020</td>
                    <td>paid</td>
                    <!-- <td class="table-action">
                        <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                        <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                    </td> -->
                </tr>
            </tbody>
        </table>
    </div>
</div>


@endsection