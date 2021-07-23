@extends('backend.master')
@section('content')
<div class="col-12 col-xl-12">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Appointment History</h5>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width:25%;">Doctor Name</th>
                    <th style="width:25%">Appointment time</th>
                    <th class="d-none d-md-table-cell" style="width:25%">Appointment Date</th>
                    <th style="width:15%">Appointment Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Vanessa Tucker</td>
                    <td>10:00 am</td>
                    <td class="d-none d-md-table-cell">June 21, 2020</td>
                    <td>active</td>
                    <td class="table-action">
                        <!-- <a href="#"><i class="align-middle" data-feather="edit-2"></i></a> -->
                        <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>Vanessa Tucker</td>
                    <td>10:00 am</td>
                    <td class="d-none d-md-table-cell">June 21, 2020</td>
                    <td>active</td>
                    <td class="table-action">
                        <!-- <a href="#"><i class="align-middle" data-feather="edit-2"></i></a> -->
                        <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>Vanessa Tucker</td>
                    <td>10:00 am</td>
                    <td class="d-none d-md-table-cell">June 21, 2020</td>
                    <td>active</td>
                    <td class="table-action">
                        <!-- <a href="#"><i class="align-middle" data-feather="edit-2"></i></a> -->
                        <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>Vanessa Tucker</td>
                    <td>10:00 am</td>
                    <td class="d-none d-md-table-cell">June 21, 2020</td>
                    <td>active</td>
                    <td class="table-action">
                        <!-- <a href="#"><i class="align-middle" data-feather="edit-2"></i></a> -->
                        <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection